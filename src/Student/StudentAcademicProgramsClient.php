<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class StudentAcademicProgramsClient
     *
     * StudentAcademicProgramsClient class used to interact with the `student-academic-programs` data type.
     * Domain: Student
     * Functional Area: Registration - Enrollments
     * Model Name: student-academic-programs
     * Banner Data Model Versions Supported: 7, 16.0.0 , 17.0.0
     * Colleague Data Model Versions Supported: 6 (CRU), 11 (CRU), 16.0.0 (R), 17.0.0 (R)
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class StudentAcademicProgramsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '17.0.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '17.0.0 (R)';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/student-academic-programs';
    }