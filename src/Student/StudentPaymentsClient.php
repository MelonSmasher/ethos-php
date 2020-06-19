<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class StudentPaymentsClient
     *
     * StudentPaymentsClient class used to interact with the `student-payments` data type.
     * Domain: Student
     * Functional Area: Account Receivables - Payments
     * Model Name: student-payments
     * Banner Data Model Versions Supported: 6, 11, 16.0.0
     * Colleague Data Model Versions Supported: 6, 11, 11.1.0, 16.0.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class StudentPaymentsClient extends EthosClient
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
        public $colleagueApiVersion = '16.0.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/student-payments';
    }