<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class StudentAcademicProgramsSubmissionsClient
     *
     * StudentAcademicProgramsSubmissionsClient class used to interact with the `student-academic-programs-submissions` data type.
     * Domain: Student
     * Functional Area: Registration - Enrollments
     * Model Name: student-academic-programs-submissions
     * Banner Read/Write Support: CU
     * Colleague Read/Write Support: CU
     * Banner Data Model Versions Supported: 1.0.0
     * Colleague Data Model Versions Supported: 1.0.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class StudentAcademicProgramsSubmissionsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|bool
         */
        public $bannerApiVersion = '1.0.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|bool
         */
        public $colleagueApiVersion = '1.0.0';

        /**
         * Can Create Colleague
         *
         * Determines if the resource is available for creates using Colleague as the backend.
         *
         * @var bool
         */
        protected $canCreateColleague = true;

        /**
         * Can Read Colleague
         *
         * Determines if the resource is available for reads using Colleague as the backend.
         *
         * @var bool
         */
        protected $canReadColleague = false;

        /**
         * Can Update Colleague
         *
         * Determines if the resource is available for updates using Colleague as the backend.
         *
         * @var bool
         */
        protected $canUpdateColleague = true;

        /**
         * Can Delete Colleague
         *
         * Determines if the resource is available for deletes using Colleague as the backend.
         *
         * @var bool
         */
        protected $canDeleteColleague = false;

        /**
         * Can Create Banner
         *
         * Determines if the resource is available for creates using Banner as the backend.
         *
         * @var bool
         */
        protected $canCreateBanner = true;

        /**
         * Can Read Banner
         *
         * Determines if the resource is available for reads using Banner as the backend.
         *
         * @var bool
         */
        protected $canReadBanner = false;

        /**
         * Can Update Banner
         *
         * Determines if the resource is available for updates using Banner as the backend.
         *
         * @var bool
         */
        protected $canUpdateBanner = true;

        /**
         * Can Delete Banner
         *
         * Determines if the resource is available for deletes using Banner as the backend.
         *
         * @var bool
         */
        protected $canDeleteBanner = false;
    
        /**
         * Base Route
         *
         * The base API route.
         *
         * @var string
         */
        protected $baseRoute = '/api/student-academic-programs-submissions';
    }