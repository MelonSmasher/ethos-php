<?php
    
    
    namespace MelonSmasher\EthosPHP\HumanResources;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class ExternalEmploymentPositionsClient
     *
     * ExternalEmploymentPositionsClient class used to interact with the `external-employment-positions` data type.
     * Domain: Human Resources
     * Functional Area: Hiring - Applicants
     * Model Name: external-employment-positions
     * Banner Data Model Versions Supported: 10
     * Colleague Data Model Versions Supported: 10
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class ExternalEmploymentPositionsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '10';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '10';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/external-employment-positions';
    }