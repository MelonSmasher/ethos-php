<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class BlanketPurchaseOrdersClient
     *
     * BlanketPurchaseOrdersClient class used to interact with the `blanket-purchase-orders` data type.
     * Domain: Finance
     * Functional Area: Purchasing and Procurement - Blanket Purchase Orders
     * Model Name: blanket-purchase-orders
     * Banner Data Model Versions Supported: 16.0.0
     * Colleague Data Model Versions Supported: 16.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class BlanketPurchaseOrdersClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '16.0.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '16.1.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/blanket-purchase-orders';
    }