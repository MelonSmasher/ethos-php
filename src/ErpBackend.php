<?php


namespace MelonSmasher\EthosPHP;


use MyCLabs\Enum\Enum;

/**
 * Class ErpBackend
 *
 * The available ERP backends.
 *
 * @package MelonSmasher\EthosPHP
 * @license MIT
 * @license https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE MIT License
 * @author Alex Markessinis
 */
class ErpBackend extends Enum
{
    const COLLEAGUE = 'colleague';
    const BANNER = 'banner';
}