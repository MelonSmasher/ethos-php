<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class PersonalRelationshipInitiationProcessClient
     *
     * PersonalRelationshipInitiationProcessClient class used to interact with the `personal-relationship-initiation-process` data type.
     * Domain: Foundation
     * Functional Area: Demographics - Relationships
     * Model Name: personal-relationship-initiation-process
     * Banner Data Model Versions Supported: 
     * Colleague Data Model Versions Supported: 1.0.0 BETA
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class PersonalRelationshipInitiationProcessClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = false;
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '1.0.0 BETA';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/personal-relationship-initiation-process';
    }