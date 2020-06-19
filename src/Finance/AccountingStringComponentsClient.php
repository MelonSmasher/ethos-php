<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AccountingStringComponentsClient
     *
     * AccountingStringComponentsClient class used to interact with the `accounting-string-components` data type.
     * Domain: Finance
     * Functional Area: General Ledger - GL Account Structure
     * Model Name: accounting-string-components
     * Banner Data Model Versions Supported: 8
     * Colleague Data Model Versions Supported: 8
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AccountingStringComponentsClient extends EthosClient
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
        protected $baseRoute = '/api/accounting-string-components';
    }