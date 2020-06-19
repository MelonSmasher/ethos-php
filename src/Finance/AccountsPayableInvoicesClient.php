<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AccountsPayableInvoicesClient
     *
     * AccountsPayableInvoicesClient class used to interact with the `accounts-payable-invoices` data type.
     * Domain: Finance
     * Functional Area: Accounts Payable - Invoices
     * Model Name: accounts-payable-invoices
     * Banner Data Model Versions Supported: 8,11, 11.1.0
     * Colleague Data Model Versions Supported: 11, 11.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AccountsPayableInvoicesClient extends EthosClient
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
        protected $baseRoute = '/api/accounts-payable-invoices';
    }