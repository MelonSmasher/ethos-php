<?php
    
    
    namespace MelonSmasher\EthosPHP\Recruitment;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class StudentAptitudeAssessmentsClient
     *
     * StudentAptitudeAssessmentsClient class used to interact with the `student-aptitude-assessments` data type.
     * Domain: Recruitment
     * Functional Area: Student - Curriculum Management - Non-courses
     * Model Name: student-aptitude-assessments
     * Banner Data Model Versions Supported: 9, 11, 16.0.0
     * Colleague Data Model Versions Supported: 9, 11, 16.0.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class StudentAptitudeAssessmentsClient extends EthosClient
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
        protected $baseRoute = '/api/student-aptitude-assessments';
    }