<?php
    
    
    namespace MelonSmasher\EthosPHP\Student;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AttendanceCategoriesClient
     *
     * AttendanceCategoriesClient class used to interact with the `attendance-categories` data type.
     * Domain: Student
     * Functional Area: Attendance - Section Daily Attendance
     * Model Name: attendance-categories
     * Banner Read/Write Support: R
     * Colleague Read/Write Support: R
     * Banner Data Model Versions Supported: 10
     * Colleague Data Model Versions Supported: 10
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AttendanceCategoriesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|bool
         */
        public $bannerApiVersion = '10';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|bool
         */
        public $colleagueApiVersion = '10';

        /**
         * Can Create Colleague
         *
         * Determines if the resource is available for creates using Colleague as the backend.
         *
         * @var bool
         */
        protected $canCreateColleague = false;

        /**
         * Can Read Colleague
         *
         * Determines if the resource is available for reads using Colleague as the backend.
         *
         * @var bool
         */
        protected $canReadColleague = true;

        /**
         * Can Update Colleague
         *
         * Determines if the resource is available for updates using Colleague as the backend.
         *
         * @var bool
         */
        protected $canUpdateColleague = false;

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
        protected $canCreateBanner = false;

        /**
         * Can Read Banner
         *
         * Determines if the resource is available for reads using Banner as the backend.
         *
         * @var bool
         */
        protected $canReadBanner = true;

        /**
         * Can Update Banner
         *
         * Determines if the resource is available for updates using Banner as the backend.
         *
         * @var bool
         */
        protected $canUpdateBanner = false;

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
        protected $baseRoute = '/api/attendance-categories';
    }