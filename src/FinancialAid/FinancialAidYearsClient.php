<?php
    
    
    namespace MelonSmasher\EthosPHP\FinancialAid;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class FinancialAidYearsClient
     *
     * FinancialAidYearsClient class used to interact with the `financial-aid-years` data type.
     * Domain: Financial Aid
     * Functional Area: Awards - FA Awards
     * Model Name: financial-aid-years
     * Banner Data Model Versions Supported: 7
     * Colleague Data Model Versions Supported: 7
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class FinancialAidYearsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '7';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '7';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/financial-aid-years';
    }