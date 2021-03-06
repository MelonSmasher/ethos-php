<?php

namespace MelonSmasher\EthosPHP;

use GuzzleHttp\Client;

/**
 * Class Ethos
 *
 * Base class used to build the Ethos session.
 *
 * @package MelonSmasher\EthosPHP
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
final class Ethos
{
    /**
     * HTTP Client.
     *
     * The HTTP client used to communicate with Ethos.
     *
     * @var Client
     */
    public $httpClient;

    /**
     * ERP Backend.
     *
     * The ERP backing Ethos.
     *
     * @var ErpBackend
     */
    public $erpBackend;

    /**
     * Ethos-php version.
     *
     * This string defines the client version
     *
     * @var string
     */
    private $_version = '0.1.0';

    /**
     * JSON Web Token.
     *
     * The current JWT for the authenticated session.
     *
     * @var string|null
     */
    private $_jwt = null;

    /**
     * Base API URL.
     *
     * The base API url used to communicate with Ethos.
     *
     * @var string
     */
    private $_baseURL;

    /**
     * API key / secret / refresh token.
     *
     * The API key used to authenticate with the API.
     *
     * @var string|null
     */
    private $_secret;

    /**
     * Ethos constructor.
     *
     * Constructs an authenticated Ethos session.
     *
     * @param $secret
     * @param string $baseURL
     * @param ErpBackend $erpBackend
     * @param string $jwt
     */
    public function __construct($secret, $baseURL, $erpBackend, $jwt = '')
    {
        // Set the secret property
        $this->_secret = $secret;
        // Sets the base url
        $this->_baseURL = $baseURL;
        // Set the ERP backend
        $this->erpBackend = $erpBackend;
        // Request a JWT/Session token, if we don't have one, using the secret and builds a new http client
        if (empty($jwt)) $this->reAuthenticate();
        // If we have a JWT set it
        if(!empty($jwt)) $this->setJWT($jwt);
    }

    /**
     * Re-Authenticate.
     *
     * Builds a new authenticated session and sets a new `httpClient`.
     */
    public function reauthenticate()
    {
        // Authenticate with the Ethos API using the API key / secret / refresh token
        $this->_authenticate();
        // Build an HTTP client that uses the JWT / session token
        $this->_buildClient();
    }

    /**
     * Get JWT
     *
     * Gets the JWT for this Ethos session.
     *
     * @return string|null
     */
    public function getJWT()
    {
        return $this->_jwt;
    }

    /**
     * Set JWT
     *
     * Sets the JWT for this Ethos session.
     *
     * @param $jwt
     */
    public function setJWT($jwt)
    {
        $this->_jwt = $jwt;
        // Build an HTTP client that uses the JWT / session token
        $this->_buildClient();
    }

    /**
     * Authenticate with Ethos.
     *
     * Authenticates with Ethos and sets the `jwt` class property.
     */
    private function _authenticate()
    {
        // Build a temporary HTTP client using the API key / secret / refresh token
        $httpAuthClient = $this->_buildClient($this->_secret);
        // Send the request and store the JWT
        $this->setJWT($httpAuthClient->post('/auth')->getBody()->getContents());
        // @todo Auth Error Handling
    }

    /**
     * Build HTTP client.
     *
     * Builds and returns an HTTP client.
     * If a secret is supplied only the HTTP client is returned.
     * If no secret is supplied the `jwt` class property is used.
     * The `httpClient` property is set in addition to returning the client.
     *
     * @param string|null $secret
     *
     * @return Client
     */
    private function _buildClient($secret = null)
    {
        // If no secret was supplied
        if (empty($secret)) {
            // Build a new client using the `jwt` property
            $client = new Client([
                'base_uri' => $this->_baseURL,
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->_jwt,
                    'User-Agent' => 'MelonSmasher/ethos-php/' . $this->_version
                ],
            ]);
            // Set the new client as the `httpClient` property
            $this->httpClient = $client;

            return $client;
        }
        // We have a secret so build a new HTTP client using it
        // Return the new HTTP client
        return $client = new Client([
            'base_uri' => $this->_baseURL,
            'headers' => [
                'Authorization' => 'Bearer ' . $secret,
                'User-Agent' => 'MelonSmasher/ethos-php/' . $this->_version,
                'Accept' => '*/*'
            ],
        ]);
    }
}
