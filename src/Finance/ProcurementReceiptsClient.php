<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class ProcurementReceiptsClient
     *
     * ProcurementReceiptsClient class used to interact with the `procurement-receipts` data type.
     * Domain: Finance
     * Functional Area: Purchasing and Procurement - Receiving
     * Model Name: procurement-receipts
     * Banner Data Model Versions Supported: 13.1.0
     * Colleague Data Model Versions Supported: 13, 13.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class ProcurementReceiptsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '13.1.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '13.1.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/procurement-receipts';
    }