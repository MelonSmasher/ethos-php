<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class RoomCharacteristicsClient
     *
     * RoomCharacteristicsClient class used to interact with the `room-characteristics` data type.
     * Domain: Foundation
     * Functional Area: Campus Life - Housing
     * Model Name: room-characteristics
     * Banner Data Model Versions Supported: 8
     * Colleague Data Model Versions Supported: 6, 8
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class RoomCharacteristicsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '8';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '8';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/room-characteristics';
    }