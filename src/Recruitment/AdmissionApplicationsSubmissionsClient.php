<?php


    namespace MelonSmasher\EthosPHP\Recruitment;


    use MelonSmasher\EthosPHP\EthosClient;

    /**
     * Class AdmissionApplicationsSubmissionsClient
     *
     * AdmissionApplicationsSubmissionsClient class used to interact with the `admission-applications-submissions` data type.
     * Domain: Recruitment
     * Functional Area: Funnel - Applications
     * Model Name: admission-applications-submissions
     * Banner Read/Write Support: CU
     * Colleague Read/Write Support: CU
     * Banner Data Model Versions Supported: 1.0.0
     * Colleague Data Model Versions Supported: 1.1.0
     *
     * @package MelonSmasher\EthosPHP\Recruitment
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AdmissionApplicationsSubmissionsClient extends EthosClient
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
        public $colleagueApiVersion = '1.1.0';

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
         * Accept Header Modifier
         *
         * Used to modify the accept header for models like sections-maximum.
         *
         * @var string
         */
        public $acceptModifier = 'admission-applications-submissions.';

        /**
         * Base Route
         *
         * The base API route.
         *
         * @var string
         */
        protected $baseRoute = '/api/admission-applications';
    }