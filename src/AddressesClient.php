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
     * API Version
     *
     * The version of the API to use with this request.
     *
     * @var string
     */
    public $apiVersion = '11.1.0';

    /**
     * Base Route
     *
     * The base API route
     *
     * @var string
     */
    protected $baseRoute = '/api/addresses';
}
