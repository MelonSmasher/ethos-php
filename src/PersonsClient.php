<?php


namespace MelonSmasher\EthosPHP;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

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
}
