<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class StudentFinancialAidAwardPaymentsClient
     *
     * StudentFinancialAidAwardPaymentsClient class used to interact with the `student-financial-aid-award-payments` data type.
     * Domain: Student
     * Functional Area: Account Receivables - Financial Aid Payments
     * Model Name: student-financial-aid-award-payments
     * Banner Data Model Versions Supported: 11
     * Colleague Data Model Versions Supported: 
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class StudentFinancialAidAwardPaymentsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '11';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = false;
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/student-financial-aid-award-payments';
    }