<?php
    
    
    namespace MelonSmasher\EthosPHP\HumanResources;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class PayClassesClient
     *
     * PayClassesClient class used to interact with the `pay-classes` data type.
     * Domain: Human Resources
     * Functional Area: Positions - Pay classes
     * Model Name: pay-classes
     * Banner Data Model Versions Supported: 12, 12.1.0
     * Colleague Data Model Versions Supported: 11, 12, 12.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class PayClassesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '12.1.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '12.1.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/pay-classes';
    }