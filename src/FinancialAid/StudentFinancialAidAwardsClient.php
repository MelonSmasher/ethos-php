<?php
    
    
    namespace MelonSmasher\EthosPHP\FinancialAid;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class StudentFinancialAidAwardsClient
     *
     * StudentFinancialAidAwardsClient class used to interact with the `student-financial-aid-awards` data type.
     * Domain: Financial Aid
     * Functional Area: Awards - FA Awards
     * Model Name: student-financial-aid-awards
     * Banner Data Model Versions Supported: 7,11, 11.1.0
     * Colleague Data Model Versions Supported: 7, 11.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class StudentFinancialAidAwardsClient extends EthosClient
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
        protected $baseRoute = '/api/student-financial-aid-awards';
    }