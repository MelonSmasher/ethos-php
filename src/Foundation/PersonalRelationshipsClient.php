<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class PersonalRelationshipsClient
     *
     * PersonalRelationshipsClient class used to interact with the `personal-relationships` data type.
     * Domain: Foundation
     * Functional Area: Demographics - Relationships
     * Model Name: personal-relationships
     * Banner Data Model Versions Supported: 6 (R) , 16.0.0 (CRU)
     * Colleague Data Model Versions Supported: 6 (R), 16.0.0 (CRU)
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class PersonalRelationshipsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '16.0.0 (CRU)';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '16.0.0 (CRU)';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/personal-relationships';
    }