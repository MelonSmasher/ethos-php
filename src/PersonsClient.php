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
     * API Version
     *
     * The version of the API to use with this request.
     *
     * @var string
     */
    public $apiVersion = '12.1.0';

    /**
     * Base Route
     *
     * The base API route
     *
     * @var string
     */
    protected $baseRoute = '/api/persons';
}
