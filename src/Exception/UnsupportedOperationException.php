<?php


namespace MelonSmasher\EthosPHP\Exception;


use Throwable;
use Exception;

/**
 * Class UnsupportedOperationException
 *
 * @package MelonSmasher\EthosPHP\Exception
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
class UnsupportedOperationException extends Exception
{
    /**
     * UnsupportedOperationException constructor.
     * @param $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = 'This operation is not supported.', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}