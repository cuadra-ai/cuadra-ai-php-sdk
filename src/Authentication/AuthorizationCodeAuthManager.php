<?php

declare(strict_types=1);

/*
 * CuadraAiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CuadraAiLib\Authentication;

use CoreInterfaces\Core\Request\RequestMethod;
use CoreInterfaces\Core\Request\TypeValidatorInterface;
use Core\Authentication\CoreAuth;
use Core\Client;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\AdditionalQueryParams;
use Core\Request\RequestBuilder;
use Core\Utils\CoreHelper;
use InvalidArgumentException;
use CuadraAiLib\Server;
use CuadraAiLib\Models\OauthToken;
use CuadraAiLib\Controllers\OauthAuthorizationController;
use CuadraAiLib\ConfigurationDefaults;
use CuadraAiLib\AuthorizationCodeAuth;

/**
 * Utility class for OAuth 2 authorization and token management
 */
class AuthorizationCodeAuthManager extends CoreAuth implements AuthorizationCodeAuth
{
    private $client;

    /**
     * Singleton instance of OAuth 2 API controller
     * @var OauthAuthorizationController
     */
    private $oAuthApi;

    /**
     * @var array
     */
    private $config;

    /**
     * @var OAuthToken|null
     */
    private $internalOAuthToken;

    public function __construct(array $config)
    {
        parent::__construct();
        $this->config = $config;
        $this->internalOAuthToken = $this->getOAuthToken();
    }

    public function setClient(Client $client): void
    {
        $this->client = $client;
        $this->oAuthApi = new OAuthAuthorizationController($client);
    }

    /**
     * String value for oauthClientId.
     */
    public function getOauthClientId(): string
    {
        return $this->config['oauthClientId'] ?? ConfigurationDefaults::O_AUTH_CLIENT_ID;
    }

    /**
     * String value for oauthClientSecret.
     */
    public function getOauthClientSecret(): string
    {
        return $this->config['oauthClientSecret'] ?? ConfigurationDefaults::O_AUTH_CLIENT_SECRET;
    }

    /**
     * String value for oauthRedirectUri.
     */
    public function getOauthRedirectUri(): string
    {
        return $this->config['oauthRedirectUri'] ?? ConfigurationDefaults::O_AUTH_REDIRECT_URI;
    }

    /**
     * OauthToken value for oauthToken.
     */
    public function getOauthToken(): ?OauthToken
    {
        $oauthToken = $this->config['oauthToken'];
        if ($oauthToken instanceof OauthToken) {
            return clone $oauthToken;
        }
        return ConfigurationDefaults::O_AUTH_TOKEN;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $oauthClientId OAuth 2 Client ID
     * @param string $oauthClientSecret OAuth 2 Client Secret
     * @param string $oauthRedirectUri OAuth 2 Redirection endpoint or Callback Uri
     */
    public function equals(string $oauthClientId, string $oauthClientSecret, string $oauthRedirectUri): bool
    {
        return $oauthClientId == $this->getOauthClientId() &&
            $oauthClientSecret == $this->getOauthClientSecret() &&
            $oauthRedirectUri == $this->getOauthRedirectUri();
    }

    /**
     * Clock skew time in seconds applied while checking the OAuth Token expiry.
     */
    public function getOAuthClockSkew(): int
    {
        return $this->config['OAuth2-ClockSkew'] ?? ConfigurationDefaults::O_AUTH_2_CLOCK_SKEW;
    }

    /**
     * Build an authorization URL for taking the user's consent to access data.
     * @param  string|null       $state            An opaque state string
     * @param  array|null        $additionalParams Additional parameters to add the the authorization URL
     */
    public function buildAuthorizationUrl(?string $state = null, ?array $additionalParams = null): string
    {
        return (new RequestBuilder(RequestMethod::GET, '/authorize'))
            ->server(Server::AUTH_SERVER)
            ->parameters(
                AdditionalQueryParams::init($additionalParams),
                AdditionalQueryParams::init([
                    'response_type' => 'code',
                    'client_id'     => $this->getOauthClientId(),
                    'redirect_uri'  => $this->getOauthRedirectUri(),
                    'state'         => $state
                ])
            )
            ->build($this->client)
            ->getQueryUrl();
    }

    /**
     * Fetch the OAuth token.
     * @param  string     $authorizationCode Authorization code returned by the OAuth provider.
     * @param  array|null $additionalParams  Additional parameters to send during authorization
     */
    public function fetchToken(string $authorizationCode, ?array $additionalParams = null): OauthToken
    {
        //send request for access token
        $response = $this->oAuthApi->requestToken(
            $this->buildBasicHeader(),
            $authorizationCode,
            $this->getOauthRedirectUri() ?? "",
            $additionalParams
        );

        if ($response->isError()) {
            $reason = CoreHelper::serialize($response->getResult());
            throw new InvalidArgumentException("Failed to fetch OAuthToken: $reason");
        }

        $this->addExpiryTime($response->getResult());

        return $response->getResult();
    }

    /**
     * Refresh the OAuth token.
     * @param  array|null        $additionalParams Additional parameters to send during token refresh
     */
    public function refreshToken(?array $additionalParams = null): OauthToken
    {
        //send request for token refresh
        $response = $this->oAuthApi->refreshToken(
            $this->buildBasicHeader(),
            $this->getOauthToken()->getRefreshToken() ?? "",
            null,
            $additionalParams
        );

        if ($response->isError()) {
            $reason = CoreHelper::serialize($response->getResult());
            throw new InvalidArgumentException("Failed to refresh OAuthToken: $reason");
        }

        $this->addExpiryTime($response->getResult());

        return $response->getResult();
    }

    /**
     * Has the OAuth token expired? If the token argument is not provided then this function will check the expiry of
     * initial oauthToken, that's set in the client initialization.
     */
    public function isTokenExpired(?OAuthToken $token = null): bool
    {
        $token = $token ?? $this->getOAuthToken();
        if ($token == null || empty($token->getExpiry())) {
            return true;
        }
        return $token->getExpiry() < time() + $this->getOAuthClockSkew();
    }

    /**
     * Check if client is authorized, throws exceptions when token is null or expired.
     *
     * @throws InvalidArgumentException
     */
    public function validate(TypeValidatorInterface $validator): void
    {
        if ($this->internalOAuthToken == null) {
            throw new InvalidArgumentException('Client is not authorized. An OAuth token is needed to make API calls.');
        }
        if ($this->isTokenExpired($this->internalOAuthToken)) {
            throw new InvalidArgumentException('OAuth token is expired. A valid token is needed to make API calls.');
        }
        parent::__construct(
            HeaderParam::init(
                'Authorization',
                CoreHelper::getBearerAuthString($this->internalOAuthToken->getAccessToken())
            )->requiredNonEmpty()
        );
        parent::validate($validator);
    }

    /**
     * Build authorization header value for basic auth.
     */
    private function buildBasicHeader(): string
    {
        return 'Basic ' . base64_encode(
            $this->getOauthClientId() . ':' . $this->getOauthClientSecret()
        );
    }

    /**
     * Adds the expiry time to the given oAuthToken instance.
     */
    private function addExpiryTime(OAuthToken $oAuthToken): void
    {
        $expiresIn = $oAuthToken->getExpiresIn();
        if (empty($expiresIn)) {
            return;
        }
        $oAuthToken->setExpiry(time() + $expiresIn);
    }
}
