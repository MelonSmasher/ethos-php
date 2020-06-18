<?php

namespace MelonSmasher\ethosPHP;

use GuzzleHttp\Client;

/**
 * Class Ethos
 *
 * Base class used to set the API key (a.k.a. refresh token), API base URL, and API version.
 *
 * @package MelonSmasher
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
class Ethos
{
    /**
     * ethos-php version
     *
     * This string defines the client version
     *
     * @var string
     */
    protected $version = '0.0.1';

    /**
     * JSON Web Token
     *
     * The current JWT for the authenticated session.
     *
     * @var null|string
     */
    public $jwt = null;

    /**
     * Ethos API Version
     *
     * The version of the API to send a request to.
     *
     * @var string
     */
    public $apiVersion = '12.1.0';

    /**
     * Base API URL
     *
     * The base API url used to communicate with Ethos.
     *
     * @var string
     */
    public $baseURL = 'https://integrateapi.elluciancloud.com';

    /**
     * HTTP Client
     *
     * The HTTP client used to communicate with Ethos.
     *
     * @var Client
     */
    public $httpClient;

    /**
     * API key / secret / refresh token
     *
     * The API key used to authenticate with the API. Used to obtain a JWT / session token.
     *
     * @var null|string
     */
    protected $secret = null;

    /**
     * Ethos constructor.
     *
     * Constructs an authenticated Ethos session.
     *
     * @param $secret
     * @param string $baseURL
     * @param string $apiVersion
     */
    function __construct($secret, $baseURL = 'https://integrateapi.elluciancloud.com', $apiVersion = '12.1.0')
    {
        // Set the secret property
        $this->secret = $secret;
        // Sets the base url
        $this->baseURL = $baseURL;
        // Sets the Ethos api version to use
        $this->apiVersion = $apiVersion;
        // Requests a JWT/Session token using the secret and builds a new http client
        $this->reAuthenticate();
    }

    /**
     * Re-Authenticate
     *
     * Builds a new authenticated session and sets a new `httpClient`.
     */
    public function reAuthenticate()
    {
        // Authenticate with the Ethos API using the API key / secret / refresh token
        $this->authenticate();
        // Build an HTTP client that uses the JWT / session token
        $this->buildClient();
    }

    /**
     * Authenticate with Ethos
     *
     * Authenticates with Ethos and sets the `jwt` class property.
     */
    private function authenticate()
    {
        // Build a temporary HTTP client using the API key / secret / refresh token
        $httpAuthClient = $this->buildClient($this->secret);
        // Send the request and store the JWT
        $this->jwt = $httpAuthClient->post('/auth')->getBody()->getContents();
        // @todo Auth Error Handling
    }

    /**
     * Build HTTP client
     *
     * Builds and returns an HTTP client.
     * If a secret is supplied only the HTTP client is returned.
     * If no secret is supplied the `jwt` class property is used and the `httpClient` property is set in addition to returning the client.
     *
     * @param null|string $secret
     * @return Client
     */
    private function buildClient($secret = null)
    {
        // If no secret was supplied
        if (empty($secret)) {
            // Build a new client using the `jwt` property
            $client = new Client([
                'base_uri' => $this->baseURL,
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->jwt,
                    'User-Agent' => 'MelonSmasher/ethos-php/' . $this->version,
                    'Accept' => 'application/vnd.hedtech.integration.v' . $this->apiVersion . '+json'
                ],
            ]);
            // Set the new client as the `httpClient` property
            $this->httpClient = $client;
        } else {
            // We have a secret so build a new HTTP client using it
            $client = new Client([
                'base_uri' => $this->baseURL,
                'headers' => [
                    'Authorization' => 'Bearer ' . $secret,
                    'User-Agent' => 'MelonSmasher/ethos-php/' . $this->version,
                    'Accept' => 'application/vnd.hedtech.integration.v' . $this->apiVersion . '+json'
                ],
            ]);
        }
        // Return the new HTTP client
        return $client;
    }
}