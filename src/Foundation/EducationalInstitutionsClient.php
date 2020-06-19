<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class EducationalInstitutionsClient
     *
     * EducationalInstitutionsClient class used to interact with the `educational-institutions` data type.
     * Domain: Foundation
     * Functional Area: Recruitment - Funnel - Academic history
     * Model Name: educational-institutions
     * Banner Data Model Versions Supported: 6
     * Colleague Data Model Versions Supported: 6
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class EducationalInstitutionsClient extends EthosClient
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
        protected $baseRoute = '/api/educational-institutions';
    }