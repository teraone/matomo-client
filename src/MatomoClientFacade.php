<?php

namespace Teraone\MatomoClient;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Teraone\MatomoClient\MatomoClient
 */
class MatomoClientFacade extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'matomo-client';
    }
}
