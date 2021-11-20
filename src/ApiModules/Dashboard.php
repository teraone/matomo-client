<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Dashboard {


    /**
     * MODULE: Dashboard
     */

    /**
     * Get list of dashboards
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDashboards( array $optional = [] ): array|bool|null {
        return $this->request( 'Dashboard.getDashboards', [], $optional );
    }
}
