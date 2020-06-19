<?php
    
    
    namespace MelonSmasher\EthosPHP\Recruitment;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class AdmissionApplicationTypesClient
     *
     * AdmissionApplicationTypesClient class used to interact with the `admission-application-types` data type.
     * Domain: Recruitment
     * Functional Area: Funnel - Applications
     * Model Name: admission-application-types
     * Banner Data Model Versions Supported: 6
     * Colleague Data Model Versions Supported: 6
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class AdmissionApplicationTypesClient extends EthosClient
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
        protected $baseRoute = '/api/admission-application-types';
    }