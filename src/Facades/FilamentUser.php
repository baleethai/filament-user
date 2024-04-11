<?php

namespace Baleethai\FilamentUser\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Baleethai\FilamentUser\FilamentUser
 */
class FilamentUser extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Baleethai\FilamentUser\FilamentUser::class;
    }
}
