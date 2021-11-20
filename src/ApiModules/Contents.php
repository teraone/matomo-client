<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Contents {


    /**
     * MODULE: CONTENTS
     */

    /**
     * Get content names
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getContentNames( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'Contents.getContentNames', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get content pieces
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getContentPieces( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'Contents.getContentPieces', [
            'segment' => $segment,
        ], $optional );
    }
}
