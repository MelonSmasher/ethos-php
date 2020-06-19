<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AccountFundsAvailableTransactionsClient
     *
     * AccountFundsAvailableTransactionsClient class used to interact with the `account-funds-available-transactions` data type.
     * Domain: Finance
     * Functional Area: General Ledger - Available Balance/NSF Checking
     * Model Name: account-funds-available-transactions
     * Banner Data Model Versions Supported: 11.1.0
     * Colleague Data Model Versions Supported: 11, 11.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AccountFundsAvailableTransactionsClient extends EthosClient
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
        protected $baseRoute = '/api/account-funds-available-transactions';
    }