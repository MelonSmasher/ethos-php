<?php


namespace MelonSmasher\EthosPHP;


/**
 * Class PersonsClient
 *
 * Persons class used to interact with the Persons data type.
 *
 * @package MelonSmasher
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
class PersonsClient extends EthosClient
{

    /**
     * Base Route
     *
     * The base API route
     *
     * @var string
     */
    protected $baseRoute = '/api/persons';

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