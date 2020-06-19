<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class Rooms_RoomAvailabilityClient
     *
     * Rooms_RoomAvailabilityClient class used to interact with the `rooms_room-availability` data type.
     * Domain: Foundation
     * Functional Area: Facilities - Rooms
     * Model Name: rooms_room-availability
     * Banner Data Model Versions Supported: 6, 10
     * Colleague Data Model Versions Supported: 6, 10
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class Rooms_RoomAvailabilityClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '10';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '10';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/rooms_room-availability';
    }