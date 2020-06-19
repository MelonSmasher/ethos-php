<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AccountingStringSubcomponentsClient
     *
     * AccountingStringSubcomponentsClient class used to interact with the `accounting-string-subcomponents` data type.
     * Domain: Finance
     * Functional Area: General Ledger - GL Account Structure
     * Model Name: accounting-string-subcomponents
     * Banner Data Model Versions Supported: 13
     * Colleague Data Model Versions Supported: 13
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AccountingStringSubcomponentsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '13';
    
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
        protected $baseRoute = '/api/accounting-string-subcomponents';
    }