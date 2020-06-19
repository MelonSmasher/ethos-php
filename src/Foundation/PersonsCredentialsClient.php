<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class PersonsCredentialsClient
     *
     * PersonsCredentialsClient class used to interact with the `persons-credentials` data type.
     * Domain: Foundation
     * Functional Area: Demographics - Credentials
     * Model Name: persons-credentials
     * Banner Data Model Versions Supported: 6, 8, 11, 11.1.0
     * Colleague Data Model Versions Supported: 6, 8, 11, 11.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class PersonsCredentialsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '11.1.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '11.1.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/persons-credentials';
    }