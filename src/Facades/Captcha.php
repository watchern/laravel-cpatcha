<?php

namespace Charles\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Charles\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
