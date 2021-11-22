<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait DevicePlugins {

    /**
     * MODULE: DEVICE PLUGINS
     * Get device plugins
     */

    /**
     * Get plugins
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getUserPlugin( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'DevicePlugins.getPlugin', [
            'segment' => $segment,
        ], $optional );
    }

}
