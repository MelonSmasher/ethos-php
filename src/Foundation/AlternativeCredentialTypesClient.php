<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AlternativeCredentialTypesClient
     *
     * AlternativeCredentialTypesClient class used to interact with the `alternative-credential-types` data type.
     * Domain: Foundation
     * Functional Area: Demographics - Person
     * Model Name: alternative-credential-types
     * Banner Data Model Versions Supported: 1.0.0
     * Colleague Data Model Versions Supported: 1.0.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AlternativeCredentialTypesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '1.0.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '1.0.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/alternative-credential-types';
    }