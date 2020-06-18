<?php


namespace MelonSmasher\EthosPHP;


class EthosClient
{
    /**
     * Ethos Session
     *
     * The Ethos session object
     *
     * @var Ethos
     */
    private $ethos;

    /**
     * Authentication Failures
     *
     * The amount of authentication failures.
     *
     * @var int
     */
    private $authFails = 0;

    /**
     * CreateSession
     *
     * Creates a new authenticated Ethos session
     *
     * @param $secret
     * @param string $baseURL
     * @param string $apiVersion
     * @return Ethos
     */
    public static function createSession($secret, $baseURL = 'https://integrateapi.elluciancloud.com', $apiVersion = '12.1.0')
    {
        return new Ethos($secret, $baseURL, $apiVersion);
    }

    /**
     * EthosClient constructor
     *
     * The base Ethos API client.
     *
     * @param Ethos $ethos
     */
    public function __construct(Ethos $ethos)
    {
        $this->ethos = $ethos;
    }

    /**
     * Reauthenticate
     *
     * Renews the authenticated Ethos session.
     */
    public function reauthenticate()
    {
        $this->ethos->reauthenticate();
    }

    // @todo base communication functions

    private function _get($uri, $params = [])
    {

    }

    private function _post($uri, $params = [])
    {

    }

    private function _put($uri, $params = [])
    {

    }

    private function _delete($uri, $params = [])
    {

    }

    private function _head($uri, $params = [])
    {

    }
}