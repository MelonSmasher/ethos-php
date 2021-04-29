<?php


namespace MelonSmasher\EthosPHP\Subscriptions;


use MelonSmasher\EthosPHP\EthosClient;
use MelonSmasher\EthosPHP\Exception\UnsupportedOperationException;

/**
 * Class Consume
 *
 * Consume class used to interact with the `consume` resource.
 * Domain: Subscriptions
 * Model Name: consume
 * Banner Read/Write Support: R
 * Colleague Read/Write Support: R
 * Banner Data Model Versions Supported: *
 * Colleague Data Model Versions Supported: *
 *
 * @package MelonSmasher\EthosPHP\Subscriptions
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
class Consume extends EthosClient
{
    /**
     * Can Create Colleague
     *
     * Determines if the resource is available for creates using Colleague as the backend.
     *
     * @var bool
     */
    protected $canCreateColleague = false;

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
    protected $canUpdateColleague = false;

    /**
     * Can Delete Colleague
     *
     * Determines if the resource is available for deletes using Colleague as the backend.
     *
     * @var bool
     */
    protected $canDeleteColleague = false;

    /**
     * Can Create Banner
     *
     * Determines if the resource is available for creates using Banner as the backend.
     *
     * @var bool
     */
    protected $canCreateBanner = false;

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
    protected $canUpdateBanner = false;

    /**
     * Can Delete Banner
     *
     * Determines if the resource is available for deletes using Banner as the backend.
     *
     * @var bool
     */
    protected $canDeleteBanner = false;

    /**
     * Per Page Limit
     *
     * Not supported on the consume route.
     *
     * @var bool
     */
    protected $perPageLimit = false;

    /**
     * Page
     *
     * Not supported on the consume route.
     *
     * @var bool
     */
    protected $page = false;

    /**
     * Base Route
     *
     * The base API route.
     *
     * @var string
     */
    protected $baseRoute = '/consume';

    /**
     * Next Page
     *
     * Not supported on the consume route.
     *
     * @param int $inc
     * @return void
     * @throws UnsupportedOperationException
     */
    public function nextPage($inc = 1)
    {
        throw new UnsupportedOperationException();
    }

    /**
     * Back Page
     *
     * Not supported on the consume route.
     *
     * @param int $inc
     * @return void
     * @throws UnsupportedOperationException
     */
    public function backPage($inc = 1)
    {
        throw new UnsupportedOperationException();
    }

    /**
     * Set Page
     *
     * Not supported on the consume route.
     *
     * @param int $number
     * @return void
     * @throws UnsupportedOperationException
     */
    public function setPage($number = 1)
    {
        throw new UnsupportedOperationException();
    }

    /**
     * Get Page
     *
     * Not supported on the consume route.
     *
     * @return void
     * @throws UnsupportedOperationException
     */
    public function getPage()
    {
        throw new UnsupportedOperationException();
    }

    /**
     * Get Offset
     *
     * Not supported on the consume route.
     *
     * @return void
     * @throws UnsupportedOperationException
     */
    public function getOffset()
    {
        throw new UnsupportedOperationException();
    }

    /**
     * Set Offset
     *
     * Not supported on the consume route.
     *
     * @param $int
     * @return void
     * @throws UnsupportedOperationException
     */
    public function setOffset($int)
    {
        throw new UnsupportedOperationException();
    }
}