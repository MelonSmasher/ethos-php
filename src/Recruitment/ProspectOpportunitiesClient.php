<?php
    
    
    namespace MelonSmasher\EthosPHP\Recruitment;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class ProspectOpportunitiesClient
     *
     * ProspectOpportunitiesClient class used to interact with the `prospect-opportunities` data type.
     * Domain: Recruitment
     * Functional Area: Funnel - Ratings
     * Model Name: prospect-opportunities
     * Banner Data Model Versions Supported: 16.0.0 BETA
     * Colleague Data Model Versions Supported: 16.0.0 BETA
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class ProspectOpportunitiesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '16.0.0 BETA';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '16.0.0 BETA';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/prospect-opportunities';
    }