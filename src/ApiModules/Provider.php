<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Provider {

    /**
     * MODULE: PROVIDER
     * Get provider information
     */

    /**
     * Get information about visitors internet providers
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getProvider( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'Provider.getProvider', [
            'segment' => $segment,
        ], $optional );
    }
}
