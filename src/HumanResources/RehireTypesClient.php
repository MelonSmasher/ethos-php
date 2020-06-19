<?php
    
    
    namespace MelonSmasher\EthosPHP\HumanResources;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class RehireTypesClient
     *
     * RehireTypesClient class used to interact with the `rehire-types` data type.
     * Domain: Human Resources
     * Functional Area: Personnel - Employee Positions
     * Model Name: rehire-types
     * Banner Data Model Versions Supported: 7
     * Colleague Data Model Versions Supported: 7
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class RehireTypesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '7';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '7';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/rehire-types';
    }