<?php
    
    
    namespace MelonSmasher\EthosPHP\FinancialAid;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class RestrictedStudentFinancialAidAwardsClient
     *
     * RestrictedStudentFinancialAidAwardsClient class used to interact with the `restricted-student-financial-aid-awards` data type.
     * Domain: Financial Aid
     * Functional Area: Awards - FA Awards
     * Model Name: restricted-student-financial-aid-awards
     * Banner Data Model Versions Supported: 7,11
     * Colleague Data Model Versions Supported: 7, 11
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class RestrictedStudentFinancialAidAwardsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '7,11';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '11';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/restricted-student-financial-aid-awards';
    }