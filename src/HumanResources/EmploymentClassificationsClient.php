<?php
    
    
    namespace MelonSmasher\EthosPHP\HumanResources;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class EmploymentClassificationsClient
     *
     * EmploymentClassificationsClient class used to interact with the `employment-classifications` data type.
     * Domain: Human Resources
     * Functional Area: Personnel - Employee Positions
     * Model Name: employment-classifications
     * Banner Read/Write Support: R
     * Colleague Read/Write Support: R
     * Banner Data Model Versions Supported: 7
     * Colleague Data Model Versions Supported: 7
     *
     * @package MelonSmasher\EthosPHP\HumanResources
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class EmploymentClassificationsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|bool
         */
        public $bannerApiVersion = '7';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|bool
         */
        public $colleagueApiVersion = '7';

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
        protected $baseRoute = '/api/employment-classifications';
    }