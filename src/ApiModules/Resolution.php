<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

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
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getResolution( string $segment = '', array $optional = [] ): array|bool|null {
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
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getConfiguration( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'Resolution.getConfiguration', [
            'segment' => $segment,
        ], $optional );
    }


}
