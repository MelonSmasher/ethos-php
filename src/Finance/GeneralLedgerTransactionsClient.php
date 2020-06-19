<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class GeneralLedgerTransactionsClient
     *
     * GeneralLedgerTransactionsClient class used to interact with the `general-ledger-transactions` data type.
     * Domain: Finance
     * Functional Area: General Ledger - General Ledger Transactions
     * Model Name: general-ledger-transactions
     * Banner Data Model Versions Supported: 6, 8, 12, 12.1.0
     * Colleague Data Model Versions Supported: 6, 8, 12, 12.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class GeneralLedgerTransactionsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '12.1.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '12.1.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/general-ledger-transactions';
    }