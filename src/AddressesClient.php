<?php


namespace MelonSmasher\EthosPHP;


/**
 * Class AddressesClient
 *
 * Addresses class used to interact with the Addresses data type.
 *
 * @package MelonSmasher
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
class AddressesClient extends EthosClient
{

    /**
     * Base Route
     *
     * The base API route
     *
     * @var string
     */
    protected $baseRoute = '/api/addresses';

    /**
     * get
     *
     * Performs a get on the base route with any additional params or headers supplied.
     *
     * @param array $params
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($params = [], $headers = [])
    {
        return $this->_get($this->baseRoute, $params, $headers);
    }

}