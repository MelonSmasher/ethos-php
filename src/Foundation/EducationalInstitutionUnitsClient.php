<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class EducationalInstitutionUnitsClient
     *
     * EducationalInstitutionUnitsClient class used to interact with the `educational-institution-units` data type.
     * Domain: Foundation
     * Functional Area: Organizations and Corporations - Organization Profile
     * Model Name: educational-institution-units
     * Banner Data Model Versions Supported: 6, 7
     * Colleague Data Model Versions Supported: 6, 7, 12
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class EducationalInstitutionUnitsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '7';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '12';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/educational-institution-units';
    }