<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class PaymentTransactionsClient
     *
     * PaymentTransactionsClient class used to interact with the `payment-transactions` data type.
     * Domain: Finance
     * Functional Area: Accounts Payable - Payment data
     * Model Name: payment-transactions
     * Banner Data Model Versions Supported: 12, 12.1.0
     * Colleague Data Model Versions Supported: 12.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class PaymentTransactionsClient extends EthosClient
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
        protected $baseRoute = '/api/payment-transactions';
    }