<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class VeteranStatusesClient
     *
     * VeteranStatusesClient class used to interact with the `veteran-statuses` data type.
     * Domain: Foundation
     * Functional Area: Demographics - Military Info (US)
     * Model Name: veteran-statuses
     * Banner Data Model Versions Supported: 9
     * Colleague Data Model Versions Supported: 9
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class VeteranStatusesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '9';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '9';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/veteran-statuses';
    }