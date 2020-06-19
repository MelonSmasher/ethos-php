<?php
    
    
    namespace MelonSmasher\EthosPHP\FinancialAid;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class FinancialAidApplicationsClient
     *
     * FinancialAidApplicationsClient class used to interact with the `financial-aid-applications` data type.
     * Domain: Financial Aid
     * Functional Area: Applicant Data - Applicant Profile
     * Model Name: financial-aid-applications
     * Banner Data Model Versions Supported: 9
     * Colleague Data Model Versions Supported: 9
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class FinancialAidApplicationsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '9';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '9';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/financial-aid-applications';
    }