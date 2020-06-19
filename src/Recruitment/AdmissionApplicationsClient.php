<?php
    
    
    namespace MelonSmasher\EthosPHP\Recruitment;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AdmissionApplicationsClient
     *
     * AdmissionApplicationsClient class used to interact with the `admission-applications` data type.
     * Domain: Recruitment
     * Functional Area: Funnel - Applications
     * Model Name: admission-applications
     * Banner Data Model Versions Supported: 9 (R), 11 (CRU), 16.0.0 (R)
     * Colleague Data Model Versions Supported: 6 (R), 11 (CRU), 16.1.0 (R)
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AdmissionApplicationsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '16.0.0 (R)';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '16.1.0 (R)';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/admission-applications';
    }