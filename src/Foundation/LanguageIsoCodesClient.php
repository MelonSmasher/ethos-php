<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class LanguageIsoCodesClient
     *
     * LanguageIsoCodesClient class used to interact with the `language-iso-codes` data type.
     * Domain: Foundation
     * Functional Area: Configuration - ISO Code Standards
     * Model Name: language-iso-codes
     * Banner Data Model Versions Supported: 1.0.0
     * Colleague Data Model Versions Supported: 1.0.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class LanguageIsoCodesClient extends EthosClient
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
        public $colleagueApiVersion = '1.0.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/language-iso-codes';
    }