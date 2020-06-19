<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class InstructionalPlatformsClient
     *
     * InstructionalPlatformsClient class used to interact with the `instructional-platforms` data type.
     * Domain: Student
     * Functional Area: Curriculum Management - Sections
     * Model Name: instructional-platforms
     * Banner Data Model Versions Supported: 6
     * Colleague Data Model Versions Supported: 6
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class InstructionalPlatformsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '6';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '6';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/instructional-platforms';
    }