<?php
    
    
    namespace MelonSmasher\EthosPHP\Finance;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class FixedAssetCategoriesClient
     *
     * FixedAssetCategoriesClient class used to interact with the `fixed-asset-categories` data type.
     * Domain: Finance
     * Functional Area: Fixed Assets - Fixed asset
     * Model Name: fixed-asset-categories
     * Banner Data Model Versions Supported: 12
     * Colleague Data Model Versions Supported: 12
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class FixedAssetCategoriesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '12';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '12';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/fixed-asset-categories';
    }