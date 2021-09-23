<?php

namespace Larabookir\Gateway;

use Illuminate\Support\Manager;
use Illuminate\Support\Str;

class GatewayManager extends Manager
{   
    /**
     * Get a driver instance.
     *
     * @param  string|null  $name
     * @return mixed
     */
    public function terminal($name = null)
    {
        return new GatewayResolver(
            strtolower($name),
            $this->app['config']['gateway.'. strtolower($name) .'.bank']
        );
    }

    // /**
    //  * Get the default Gateway driver name.
    //  *
    //  * @return string
    //  */
    public function getDefaultdriver(){
        return $this->app['config']['gateway.default_terminal'] ?? null;
    }
}