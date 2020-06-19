<?php
    
    
    namespace MelonSmasher\EthosPHP\FinancialAid;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class StudentFinancialAidAcademicProgressStatusesClient
     *
     * StudentFinancialAidAcademicProgressStatusesClient class used to interact with the `student-financial-aid-academic-progress-statuses` data type.
     * Domain: Financial Aid
     * Functional Area: Status - Satisfactory Academic Progress (SAP)
     * Model Name: student-financial-aid-academic-progress-statuses
     * Banner Data Model Versions Supported: 15
     * Colleague Data Model Versions Supported: 15
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class StudentFinancialAidAcademicProgressStatusesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '15';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '15';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/student-financial-aid-academic-progress-statuses';
    }