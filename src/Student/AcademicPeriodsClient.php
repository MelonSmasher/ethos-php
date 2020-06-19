<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AcademicPeriodsClient
     *
     * AcademicPeriodsClient class used to interact with the `academic-periods` data type.
     * Domain: Student
     * Functional Area: Curriculum Management - Academic periods
     * Model Name: academic-periods
     * Banner Data Model Versions Supported: 8, 16.0.0,16.1.0
     * Colleague Data Model Versions Supported: 6, 8, 16.0.0, 16.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AcademicPeriodsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '16.0.0,16.1.0';
    
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
        protected $baseRoute = '/api/academic-periods';
    }