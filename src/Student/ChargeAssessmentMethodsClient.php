<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class ChargeAssessmentMethodsClient
     *
     * ChargeAssessmentMethodsClient class used to interact with the `charge-assessment-methods` data type.
     * Domain: Student
     * Functional Area: Curriculum Management - Sections
     * Model Name: charge-assessment-methods
     * Banner Data Model Versions Supported: 13
     * Colleague Data Model Versions Supported: 13
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class ChargeAssessmentMethodsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '13';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '13';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/charge-assessment-methods';
    }