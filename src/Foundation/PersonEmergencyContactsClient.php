<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class PersonEmergencyContactsClient
     *
     * PersonEmergencyContactsClient class used to interact with the `person-emergency-contacts` data type.
     * Domain: Foundation
     * Functional Area: Demographics - Emergency Info
     * Model Name: person-emergency-contacts
     * Banner Read/Write Support: CRU
     * Colleague Read/Write Support: CRUD
     * Banner Data Model Versions Supported: 1.0.0
     * Colleague Data Model Versions Supported: 1.0.0
     *
     * @package MelonSmasher\EthosPHP\Foundation
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class PersonEmergencyContactsClient extends EthosClient
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
        public $colleagueApiVersion = '1.0.0';

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
        protected $canReadColleague = true;

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
        protected $canDeleteColleague = true;

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
        protected $canReadBanner = true;

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
         * Base Route
         *
         * The base API route.
         *
         * @var string
         */
        protected $baseRoute = '/api/person-emergency-contacts';
    }