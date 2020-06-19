<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AcademicDisciplinesClient
     *
     * AcademicDisciplinesClient class used to interact with the `academic-disciplines` data type.
     * Domain: Student
     * Functional Area: Curriculum Management - Academic Programs
     * Model Name: academic-disciplines
     * Banner Data Model Versions Supported: 7, 10, 15
     * Colleague Data Model Versions Supported: 6, 7, 10, 15
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AcademicDisciplinesClient extends EthosClient
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
        protected $baseRoute = '/api/academic-disciplines';
    }