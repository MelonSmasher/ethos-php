<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AccountingStringComponentValuesClient
     *
     * AccountingStringComponentValuesClient class used to interact with the `accounting-string-component-values` data type.
     * Domain: Finance
     * Functional Area: General Ledger - Chart of Accounts
     * Model Name: accounting-string-component-values
     * Banner Data Model Versions Supported: 8, 11, 15
     * Colleague Data Model Versions Supported: 8, 11, 15
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AccountingStringComponentValuesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '15';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '15';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/accounting-string-component-values';
    }