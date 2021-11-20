<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

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
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUserPlugin( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicePlugins.getPlugin', [
            'segment' => $segment,
        ], $optional );
    }

}
