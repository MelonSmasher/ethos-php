<?php


namespace MelonSmasher\EthosPHP;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

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
}
