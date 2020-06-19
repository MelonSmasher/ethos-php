<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class StudentAcademicPeriodProfilesClient
     *
     * StudentAcademicPeriodProfilesClient class used to interact with the `student-academic-period-profiles` data type.
     * Domain: Student
     * Functional Area: Student Profile - Academic Standing
     * Model Name: student-academic-period-profiles
     * Banner Data Model Versions Supported: 7
     * Colleague Data Model Versions Supported: 7, 11
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class StudentAcademicPeriodProfilesClient extends EthosClient
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
        public $colleagueApiVersion = '11';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/student-academic-period-profiles';
    }