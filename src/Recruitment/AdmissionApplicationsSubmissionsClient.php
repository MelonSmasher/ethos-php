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
     * Banner Data Model Versions Supported: 1.0.0
     * Colleague Data Model Versions Supported: 1.1.0
     *
     * @package MelonSmasher
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
         * @var string|boolean
         */
        public $bannerApiVersion = '1.0.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '1.1.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/admission-applications-submissions';
    }