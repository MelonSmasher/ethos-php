<?php
    
    
    namespace MelonSmasher\EthosPHP\Recruitment;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class ProspectOpportunitiesSubmissionsClient
     *
     * ProspectOpportunitiesSubmissionsClient class used to interact with the `prospect-opportunities-submissions` data type.
     * Domain: Recruitment
     * Functional Area: Funnel - Ratings
     * Model Name: prospect-opportunities-submissions
     * Banner Data Model Versions Supported: 1.0.0 BETA
     * Colleague Data Model Versions Supported: 1.0.0 BETA
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class ProspectOpportunitiesSubmissionsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '1.0.0 BETA';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '1.0.0 BETA';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/prospect-opportunities-submissions';
    }