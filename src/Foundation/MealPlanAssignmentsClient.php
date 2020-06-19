<?php
    
    
    namespace MelonSmasher\EthosPHP\Foundation;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class MealPlanAssignmentsClient
     *
     * MealPlanAssignmentsClient class used to interact with the `meal-plan-assignments` data type.
     * Domain: Foundation
     * Functional Area: Campus Life - Meal plans
     * Model Name: meal-plan-assignments
     * Banner Data Model Versions Supported: 10, 10.1.0, 16.0.0
     * Colleague Data Model Versions Supported: 10, 10.1.0, 16.0.0
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class MealPlanAssignmentsClient extends EthosClient
    {
        /**
         * API Version Banner
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $bannerApiVersion = '16.0.0';
    
        /**
         * API Version for Colleague
         *
         * The version of the API to use with this request.
         *
         * @var string|boolean
         */
        public $colleagueApiVersion = '16.0.0';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/meal-plan-assignments';
    }