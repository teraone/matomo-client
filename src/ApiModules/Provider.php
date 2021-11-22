<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

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
     * @return Response
     * @throws RequestException
     */
    public function getProvider( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Provider.getProvider', [
            'segment' => $segment,
        ], $optional );
    }
}
