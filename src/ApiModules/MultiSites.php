<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait MultiSites {

    /**
     * MODULE: MULTI SITES
     * Get information about multiple sites
     */

    /**
     * Get information about multiple sites
     *
     * @param string $segment
     * @param string $enhanced
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getMultiSites( string $segment = '', string $enhanced = '', array $optional = [] ): Response {
        return $this->request( 'MultiSites.getAll', [
            'segment'  => $segment,
            'enhanced' => $enhanced,
        ], $optional );
    }

    /**
     * Get key metrics about one of the sites the user manages
     *
     * @param string $segment
     * @param string $enhanced
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getOne( string $segment = '', string $enhanced = '', array $optional = [] ): Response {
        return $this->request( 'MultiSites.getOne', [
            'segment'  => $segment,
            'enhanced' => $enhanced,
        ], $optional );
    }
}
