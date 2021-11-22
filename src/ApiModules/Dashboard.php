<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait Dashboard {


    /**
     * MODULE: Dashboard
     */

    /**
     * Get list of dashboards
     *
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getDashboards( array $optional = [] ): Response {
        return $this->request( 'Dashboard.getDashboards', [], $optional );
    }
}
