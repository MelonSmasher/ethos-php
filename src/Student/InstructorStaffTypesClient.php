<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class InstructorStaffTypesClient
     *
     * InstructorStaffTypesClient class used to interact with the `instructor-staff-types` data type.
     * Domain: Student
     * Functional Area: Faculty - Faculty
     * Model Name: instructor-staff-types
     * Banner Data Model Versions Supported: 9
     * Colleague Data Model Versions Supported: 8, 9
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class InstructorStaffTypesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '9';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '9';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/instructor-staff-types';
    }