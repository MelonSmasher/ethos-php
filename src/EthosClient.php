<?php


namespace MelonSmasher\EthosPHP;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
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
     * API Version Banner
     *
     * The version of the API to use with this request.
     *
     * @var string|bool
     */
    public $bannerApiVersion;

    /**
     * API Version for Colleague
     *
     * The version of the API to use with this request.
     *
     * @var string
     */
    public $colleagueApiVersion;

    /**
     * Base Route
     *
     * The base API route.
     *
     * @var string
     */
    protected $baseRoute = '/api';

    /**
     * Can Create Colleague
     *
     * Determines if the resource is available for creates using Colleague as the backend.
     *
     * @var bool
     */
    protected $canCreateColleague = true;

    /**
     * Can Read Colleague
     *
     * Determines if the resource is available for reads using Colleague as the backend.
     *
     * @var bool
     */
    protected $canReadColleague = true;

    /**
     * Can Update Colleague
     *
     * Determines if the resource is available for updates using Colleague as the backend.
     *
     * @var bool
     */
    protected $canUpdateColleague = true;

    /**
     * Can Delete Colleague
     *
     * Determines if the resource is available for deletes using Colleague as the backend.
     *
     * @var bool
     */
    protected $canDeleteColleague = true;

    /**
     * Can Create Banner
     *
     * Determines if the resource is available for creates using Banner as the backend
     *
     * @var bool
     */
    protected $canCreateBanner = true;

    /**
     * Can Read Banner
     *
     * Determines if the resource is available for reads using Banner as the backend
     *
     * @var bool
     */
    protected $canReadBanner = true;

    /**
     * Can Update Banner
     *
     * Determines if the resource is available for updates using Banner as the backend
     *
     * @var bool
     */
    protected $canUpdateBanner = true;

    /**
     * Can Delete Banner
     *
     * Determines if the resource is available for deletes using Banner as the backend
     *
     * @var bool
     */
    protected $canDeleteBanner = true;

    /**
     * Per Page Limit
     *
     * The max amount of objects returned per page.
     *
     * @var int
     */
    protected $perPageLimit = 10;

    /**
     * Page
     *
     * The page of results to request.
     *
     * @var int
     */
    protected $page = 1;

    /**
     * Response
     *
     * The most recent response.
     *
     * @var ResponseInterface
     */
    private $_response;

    /**
     * Ethos Session
     *
     * The Ethos session object.
     *
     * @var Ethos
     */
    private $_ethos;

    /**
     * EthosClient constructor
     *
     * The base Ethos API client.
     *
     * @param Ethos $ethos
     * @return EthosClient;
     */
    public function __construct(Ethos $ethos)
    {
        $this->_ethos = $ethos;
        return $this;
    }

    /**
     * CreateSession
     *
     * Creates a new authenticated Ethos session
     *
     * @param $secret
     * @param string $baseURL
     * @param ErpBackend $erpBackend
     *
     * @return Ethos
     */
    public static function createSession($secret, $baseURL = 'https://integrate.elluciancloud.com', $erpBackend = ErpBackend::COLLEAGUE)
    {
        return new Ethos($secret, $baseURL, $erpBackend);
    }

    /**
     * Set Session
     *
     * Sets the active Ethos Session.
     *
     * @param Ethos $ethos
     * @return EthosClient
     */
    public function setSession(Ethos $ethos)
    {
        $this->_ethos = $ethos;
        return $this;
    }

    /**
     * Next Page
     *
     * Moves the page counter forward by the increment supplied. Default increment is 1.
     *
     * @param int $inc
     * @return EthosClient
     */
    public function nextPage($inc = 1)
    {
        $this->page += $inc;
        return $this;
    }

    /**
     * Back Page
     *
     * Moves the page counter back by the increment supplied. Default increment is 1.
     *
     * @param int $inc
     * @return EthosClient
     */
    public function backPage($inc = 1)
    {
        $this->page -= $inc;
        if ($this->page < 1) $this->page = 1;
        return $this;
    }

    /**
     * Set Page
     *
     * Sets the current page to the supplied number. The first page is 1.
     *
     * @param $number
     * @return EthosClient
     */
    public function setPage($number = 1)
    {
        $this->page = $number;
        if ($this->page < 1) $this->page = 1;
        return $this;
    }

    /**
     * Get Page
     *
     * Returns the current page number.
     *
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Get Offset
     *
     * This dynamically determines the page offset based on the page number.
     *
     * @return int
     */
    public function getOffset()
    {
        if ($this->page <= 1) return 0;
        return intval($this->page * $this->perPageLimit);
    }

    /**
     * Get Offset
     *
     * Returns the current page offset.
     *
     * @param $int
     * @return EthosClient
     */
    public function setOffset($int)
    {
        $o = $int / $this->perPageLimit;
        $this->page = ($o < 1) ? 0 : $o;
        return $this;
    }

    /**
     * Response
     *
     * Returns the response
     *
     * @return ResponseInterface
     */
    public function response()
    {
        return $this->_response;
    }

    /**
     * Data
     *
     * Returns a decoded representation of the response.
     *
     * @return array
     */
    public function data()
    {
        if (empty($this->_response)) return [];
        return json_decode($this->toJson());
    }

    /**
     * To Array
     *
     * Returns an associative array representation of the response.
     *
     * @return array
     */
    public function toArray()
    {
        if (empty($this->_response)) return [];
        return json_decode($this->toJson(), true);
    }

    /**
     * To JSON
     *
     * Returns a JSON string of the response.
     *
     * @return string
     */
    public function toJson()
    {
        if (empty($this->_response)) return json_encode([]);
        return $this->_response->getBody()->getContents();
    }

    /**
     * Response Code
     *
     * Returns the request response code.
     *
     * @return int
     */
    public function responseCode()
    {
        if (empty($this->_response)) return intval(false);
        return $this->_response->getStatusCode();
    }

    /**
     * API Version
     *
     * Uses the selected API backend to determine the API version.
     *
     * @return string
     */
    public function apiVersion()
    {
        if ($this->_ethos->erpBackend === ErpBackend::COLLEAGUE) return $this->colleagueApiVersion;
        if ($this->_ethos->erpBackend === ErpBackend::BANNER) return $this->bannerApiVersion;
    }

    /**
     * Can Create
     *
     * Uses the selected API backend to determine the create action is available.
     *
     * @return bool
     */
    public function canPerformCreate()
    {
        if ($this->_ethos->erpBackend === ErpBackend::BANNER) return $this->canCreateBanner;
        if ($this->_ethos->erpBackend === ErpBackend::COLLEAGUE) return $this->canCreateColleague;
    }

    /**
     * Can Read
     *
     * Uses the selected API backend to determine the read action is available.
     *
     * @return bool
     */
    public function canPerformRead()
    {
        if ($this->_ethos->erpBackend === ErpBackend::BANNER) return $this->canReadBanner;
        if ($this->_ethos->erpBackend === ErpBackend::COLLEAGUE) return $this->canReadColleague;
    }

    /**
     * Can Update
     *
     * Uses the selected API backend to determine the update action is available.
     *
     * @return bool
     */
    public function canPerformUpdate()
    {
        if ($this->_ethos->erpBackend === ErpBackend::BANNER) return $this->canUpdateBanner;
        if ($this->_ethos->erpBackend === ErpBackend::COLLEAGUE) return $this->canUpdateColleague;
    }

    /**
     * Can Delete
     *
     * Uses the selected API backend to determine the delete action is available.
     *
     * @return bool
     */
    public function canPerformDelete()
    {
        if ($this->_ethos->erpBackend === ErpBackend::BANNER) return $this->canDeleteBanner;
        if ($this->_ethos->erpBackend === ErpBackend::COLLEAGUE) return $this->canDeleteColleague;
    }

    /**
     * Create
     *
     * Performs a POST on the base route with any additional params or headers supplied.
     *
     * @param $data
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient|bool
     *
     * @throws GuzzleException
     */
    public function create($data, $params = [], $headers = [])
    {
        if ($this->canPerformCreate()) {
            return $this->sendPostRequest($this->baseRoute, $data, $params, $headers);
        }

        trigger_error('Unable to perform create action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Read
     *
     * Performs a GET on the base route with any additional params or headers supplied.
     *
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient|bool
     *
     * @throws GuzzleException
     */
    public function read($params = [], $headers = [])
    {
        if ($this->canPerformRead()) {
            return $this->sendGetRequest($this->baseRoute, $params, $headers);
        }

        trigger_error('Unable to perform read action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Read by ID
     *
     * Performs a GET on the ID based route with any additional params or headers supplied.
     *
     * @param string $id
     * @param array $params
     * @param array $headers
     *
     * @return bool|EthosClient
     *
     * @throws GuzzleException
     */
    public function readById($id, $params = [], $headers = [])
    {
        if ($this->canPerformRead()) {
            return $this->sendGetRequest($this->baseRoute . '/' . $id, $params, $headers);
        }

        trigger_error('Unable to perform read action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Read Head
     *
     * Performs a HEAD on the base route with any additional params or headers supplied.
     *
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient|bool
     *
     * @throws GuzzleException
     */
    public function readHead($params = [], $headers = [])
    {
        if ($this->canPerformRead()) {
            return $this->sendHeadRequest($this->baseRoute, $params, $headers);
        }

        trigger_error('Unable to perform read head action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Read head by ID
     *
     * Performs a HEAD on the ID based route with any additional params or headers supplied.
     *
     * @param string $id
     * @param array $params
     * @param array $headers
     *
     * @return bool|EthosClient
     *
     * @throws GuzzleException
     */
    public function readHeadById($id, $params = [], $headers = [])
    {
        if ($this->canPerformRead()) {
            return $this->sendHeadRequest($this->baseRoute . '/' . $id, $params, $headers);
        }

        trigger_error('Unable to perform read action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Update
     *
     * Performs a PUT on the base route with any additional params or headers supplied.
     *
     * @param $data
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient|bool
     *
     * @throws GuzzleException
     */
    public function update($data, $params = [], $headers = [])
    {
        if ($this->canPerformUpdate()) {
            return $this->sendPutRequest($this->baseRoute, $data, $params, $headers);
        }

        trigger_error('Unable to perform update action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Update by ID
     *
     * Performs a PUT on the ID based route with any additional params or headers supplied.
     *
     * @param string $id
     * @param $data
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient|bool
     *
     * @throws GuzzleException
     */
    public function updateById($id, $data, $params = [], $headers = [])
    {
        if ($this->canPerformUpdate()) {
            return $this->sendPutRequest($this->baseRoute . '/' . $id, $data, $params, $headers);
        }

        trigger_error('Unable to perform update action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Delete
     *
     * Performs a DELETE on the base route with any additional params or headers supplied.
     *
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient|bool
     *
     * @throws GuzzleException
     */
    public function delete($params = [], $headers = [])
    {
        if ($this->canPerformDelete()) {
            return $this->sendDeleteRequest($this->baseRoute, $params, $headers);
        }

        trigger_error('Unable to perform delete action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Delete by ID
     *
     * Performs a DELETE on the ID based route with any additional params or headers supplied.
     *
     * @param string $id
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient|bool
     *
     * @throws GuzzleException
     */
    public function deleteById($id, $params = [], $headers = [])
    {
        if ($this->canPerformDelete()) {
            return $this->sendDeleteRequest($this->baseRoute . '/' . $id, $params, $headers);
        }

        trigger_error('Unable to perform delete action for selected ERP backend ' . $this->_ethos->erpBackend, E_USER_WARNING);
        return false;
    }

    /**
     * Reauthenticate
     *
     * Renews the Ethos session.
     *
     * @return void
     */
    public function reauthenticate()
    {
        $this->_ethos->reauthenticate();
    }

    /**
     * SendGetRequest
     *
     * Low level HTTP GET interface
     *
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     * @return EthosClient
     *
     * @throws GuzzleException
     */
    protected function sendGetRequest($uri = null, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('GET', $uri, $params, $headers);
    }

    /**
     * SendPostRequest
     *
     * Low level HTTP POST interface
     *
     * @param null|string $uri
     * @param string $data
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient
     *
     * @throws GuzzleException
     */
    protected function sendPostRequest($uri, $data, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('POST', $uri, $params, $headers, $data);
    }

    /**
     * SendPutRequest
     *
     * Low level HTTP PUT interface
     *
     * @param null|string $uri
     * @param string $data
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient
     *
     * @throws GuzzleException
     */
    protected function sendPutRequest($uri, $data, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('PUT', $uri, $params, $headers, $data);
    }

    /**
     * SendDeleteRequest
     *
     * Low level HTTP DELETE interface
     *
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient
     *
     * @throws GuzzleException
     */
    protected function sendDeleteRequest($uri, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('DELETE', $uri, $params, $headers);
    }

    /**
     * SendHeadRequest
     *
     * Low level HTTP HEAD interface
     *
     * @param null|string $uri
     * @param array $params
     * @param array $headers
     *
     * @return EthosClient
     *
     * @throws GuzzleException
     */
    protected function sendHeadRequest($uri, $params = [], $headers = [])
    {
        // Return the response
        return $this->_request('HEAD', $uri, $params, $headers);
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
     * @param null|string $data
     *
     * @return EthosClient
     *
     * @throws GuzzleException
     */
    private function _request($method, $uri = null, $params = [], $headers = [], $data = null)
    {
        // Check for a uri if one is provided use it otherwise use the base route set on the class
        $uri = (empty($uri)) ? $this->baseRoute : $uri;

        // Was an accept header passed in?
        if (!array_key_exists('Accept', $headers)) {
            // If not, check our version string.
            // If the version string is empty send an unversioned API call.
            // If the version string is set create the Accept header.
            $headers['Accept'] = (empty($this->apiVersion())) ? '*/*' : 'application/vnd.hedtech.integration.v' . $this->apiVersion() . '+json';
            $headers['content-type'] = (empty($this->apiVersion())) ? '*/*' : 'application/vnd.hedtech.integration.v' . $this->apiVersion() . '+json';
            // If there is no API version available for the selected backend throw a warning
            if ($this->apiVersion() === false) {
                trigger_error('No data model version available for selected ERP backend '
                    . $this->_ethos->erpBackend, E_USER_WARNING);
            }
        }

        // Set the page offset
        $params['offset'] = $this->getOffset();
        // Set the result limit
        $params['limit'] = $this->perPageLimit;

        // Set any query params and merge any new headers with the main header array
        $options = [
            'query' => $params,
            'headers' => array_merge($headers, $this->_ethos->httpClient->getConfig()['headers'])
        ];

        // If there is a request body add it to the request
        if (!empty($data)) $options['body'] = $data;

        // Try to send the request
        try {
            // Store the response
            $response = $this->_ethos->httpClient->request($method, $uri, $options);
        } catch (ClientException $e) {
            // Set the response
            $response = $e->getResponse();
            // If an exception was thrown check to see if it was a 401
            if ($e->getResponse()->getStatusCode() === 401) {
                // If it was a 401, reauthenticate
                $this->reauthenticate();
                // Try to send the request once more
                // Throw an exception this time if things don't go well
                $response = $this->_ethos->httpClient->request($method, $uri, $options);
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

        // Set the response
        $this->_response = $response;

        return $this;
    }
}
