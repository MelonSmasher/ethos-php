<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AcademicProgramsClient
     *
     * AcademicProgramsClient class used to interact with the `academic-programs` data type.
     * Domain: Student
     * Functional Area: Curriculum Management - Academic Programs
     * Model Name: academic-programs
     * Banner Data Model Versions Supported: 7, 15, 15.1.0, 15.2.0
     * Colleague Data Model Versions Supported: 6, 10, 15, 15.1.0, 15.2.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AcademicProgramsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '15.2.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '15.2.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/academic-programs';
    }