<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait Resolution {


    /**
     * MODULE: USER Resultion
     * Get screen resolutions
     */

    /**
     * Get resolution
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getResolution( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Resolution.getResolution', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get configuration
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getConfiguration( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Resolution.getConfiguration', [
            'segment' => $segment,
        ], $optional );
    }


}
