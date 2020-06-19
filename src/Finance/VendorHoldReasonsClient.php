<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class VendorHoldReasonsClient
     *
     * VendorHoldReasonsClient class used to interact with the `vendor-hold-reasons` data type.
     * Domain: Finance
     * Functional Area: Accounts Payable - Vendors
     * Model Name: vendor-hold-reasons
     * Banner Data Model Versions Supported: 8
     * Colleague Data Model Versions Supported: 8
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class VendorHoldReasonsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '8';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '8';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/vendor-hold-reasons';
    }