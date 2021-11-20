<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Overlay {


    /**
     * MODULE: OVERLAY
     */

    /**
     * Unknown
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getOverlayTranslations( array $optional = [] ): array|bool|null {
        return $this->request( 'Overlay.getTranslations', [], $optional );
    }

    /**
     * Get overlay excluded query parameters
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getOverlayExcludedQueryParameters( array $optional = [] ): array|bool|null {
        return $this->request( 'Overlay.getExcludedQueryParameters', [], $optional );
    }

    /**
     * Get overlay following pages
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getOverlayFollowingPages( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'Overlay.getFollowingPages', [
            'segment' => $segment,
        ], $optional );
    }

}
