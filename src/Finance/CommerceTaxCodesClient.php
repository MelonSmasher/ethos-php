<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class CommerceTaxCodesClient
     *
     * CommerceTaxCodesClient class used to interact with the `commerce-tax-codes` data type.
     * Domain: Finance
     * Functional Area: Accounts Payable - Invoices
     * Model Name: commerce-tax-codes
     * Banner Data Model Versions Supported: 8, 8.1.0
     * Colleague Data Model Versions Supported: 8, 8.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class CommerceTaxCodesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '8.1.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '8.1.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/commerce-tax-codes';
    }