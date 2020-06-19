<?php


namespace MelonSmasher\EthosPHP;

use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\ResponseInterface;


/**
 * Class EthosClient
 *
 * Base class used to set the API key (a.k.a. refresh token), API base URL, and API version.
 * Also used for low level API communication.
 *
 * @package MelonSmasher
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
class EthosClient
{
    /**
     * Ethos Session
     *
     * The Ethos session object
     *
     * @var Ethos
     */
    private $ethos;

    /**
     * Base Route
     *
     * The base API route
     *
     * @var string
     */
    protected $baseRoute = '/api';

    /**
     * CreateSession
     *
     * Creates a new authenticated Ethos session
     *
     * @param $secret
     * @param string $baseURL
     * @param string $apiVersion
     * @return Ethos
     */
    public static function createSession($secret, $baseURL = 'https://integrate.elluciancloud.com')
    {
        return new Ethos($secret, $baseURL);//, $apiVersion);
    }

    /**
     * EthosClient constructor
     *
     * The base Ethos API client.
     *
     * @param Ethos $ethos
     */
    public function __construct(Ethos $ethos)
    {
        $this->ethos = $ethos;
    }

    /**
     * Reauthenticate
     *
     * Renews the authenticated Ethos session.
     */
    private function reauthenticate()
    {
        $this->ethos->reauthenticate();
    }

    /**
     * _request
     *
     * Low level HTTP request interface
     *
     * @param string $method
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function _request($method, $uri = null, $params = [], $headers = [])
    {
        // Check for a uri if one is provided use it otherwise use the base route set on the class
        $uri = (empty($uri)) ? $this->baseRoute : $uri;

        // Set any query params and merge any new headers with the main header array
        $options = [
            'query' => $params,
            'headers' => array_merge($headers, $this->ethos->httpClient->getConfig()['headers'])
        ];

        // Try to send the request
        try {
            // Store the response
            $response = $this->ethos->httpClient->request($method, $uri, $options);
        } catch (ClientException $e) {
            // If an exception was thrown check to see if it was a 401
            if ($e->getResponse()->getStatusCode() === 401) {
                // If it was a 401, reauthenticate
                $this->reauthenticate();
                // Try to send the request once more
                // Throw an exception this time if things don't go well
                $response = $this->ethos->httpClient->request($method, $uri, $options);
            }
            if ($e->getResponse()->getStatusCode() !== 401) {
                // If not a 401 actually throw the exception
                throw new ClientException(
                    $e->getMessage(),
                    $e->getRequest(),
                    $e->getResponse(),
                    $e->getPrevious(),
                    $e->getHandlerContext()
                );
            }
        }

        // Return the response
        return $response;
    }

    /**
     * _get
     *
     * Low level HTTP GET interface
     *
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function _get($uri = null, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('GET', $uri, $params, $headers);
    }

    /**
     * _post
     *
     * Low level HTTP POST interface
     *
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function _post($uri, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('POST', $uri, $params, $headers);
    }

    /**
     * _put
     *
     * Low level HTTP PUT interface
     *
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function _put($uri, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('PUT', $uri, $params, $headers);
    }

    /**
     * _delete
     *
     * Low level HTTP DELETE interface
     *
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function _delete($uri, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('DELETE', $uri, $params, $headers);
    }

    /**
     * _head
     *
     * Low level HTTP HEAD interface
     *
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function _head($uri, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('HEAD', $uri, $params, $headers);
    }
}