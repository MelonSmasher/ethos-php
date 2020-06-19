<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AcademicLevelsClient
     *
     * AcademicLevelsClient class used to interact with the `academic-levels` data type.
     * Domain: Student
     * Functional Area: Student Profile - Academic Levels
     * Model Name: academic-levels
     * Banner Data Model Versions Supported: 6.0, 6.1.0
     * Colleague Data Model Versions Supported: 6, 6.1.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AcademicLevelsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '6.1.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '6.1.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/academic-levels';
    }