<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class PurchasingArrangementsClient
     *
     * PurchasingArrangementsClient class used to interact with the `purchasing-arrangements` data type.
     * Domain: Finance
     * Functional Area: Purchasing and Procurement - Requisitions
     * Model Name: purchasing-arrangements
     * Banner Data Model Versions Supported: 
     * Colleague Data Model Versions Supported: 13
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class PurchasingArrangementsClient extends EthosClient
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
        public $colleagueApiVersion = '13';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/purchasing-arrangements';
    }