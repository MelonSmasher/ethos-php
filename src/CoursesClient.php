<?php


namespace MelonSmasher\EthosPHP;


/**
 * Class CoursesClient
 *
 * Courses class used to interact with the Courses data type.
 *
 * @package MelonSmasher
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
class CoursesClient extends EthosClient
{
    /**
     * API Version
     *
     * The version of the API to use with this request.
     *
     * @var string
     */
    public $apiVersion = '16.0.0';

    /**
     * Base Route
     *
     * The base API route
     *
     * @var string
     */
    protected $baseRoute = '/api/courses';
}
