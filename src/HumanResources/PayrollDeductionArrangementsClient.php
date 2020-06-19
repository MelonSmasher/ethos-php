<?php
    
    
    namespace MelonSmasher\EthosPHP\HumanResources;
    
    
    use MelonSmasher\EthosPHP\EthosClient;
    
    /**
     * Class PayrollDeductionArrangementsClient
     *
     * PayrollDeductionArrangementsClient class used to interact with the `payroll-deduction-arrangements` data type.
     * Domain: Human Resources
     * Functional Area: Payroll - Deductions
     * Model Name: payroll-deduction-arrangements
     * Banner Data Model Versions Supported: 7
     * Colleague Data Model Versions Supported: 7
     *
     * @package MelonSmasher
     * @license MIT
     * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
     * @author Alex Markessinis
     */
    class PayrollDeductionArrangementsClient extends EthosClient
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
        public $colleagueApiVersion = '7';
    
        /**
         * Base Route
         *
         * The base API route
         *
         * @var string
         */
        protected $baseRoute = '/api/payroll-deduction-arrangements';
    }