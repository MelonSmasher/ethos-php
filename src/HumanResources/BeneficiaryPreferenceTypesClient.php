<?php
    
    
    namespace MelonSmasher\EthosPHP\HumanResources;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class BeneficiaryPreferenceTypesClient
     *
     * BeneficiaryPreferenceTypesClient class used to interact with the `beneficiary-preference-types` data type.
     * Domain: Human Resources
     * Functional Area: Personnel - Benefits
     * Model Name: beneficiary-preference-types
     * Banner Data Model Versions Supported: 11
     * Colleague Data Model Versions Supported: 11
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class BeneficiaryPreferenceTypesClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '11';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '11';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/beneficiary-preference-types';
    }