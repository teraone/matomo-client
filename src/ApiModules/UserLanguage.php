<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait UserLanguage {
    /**
     * MODULE: USER LANGUAGE
     * Get the user language
     */

    /**
     * Get language
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getUserLanguage( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'UserLanguage.getLanguage', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get language code
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getUserLanguageCode( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'UserLanguage.getLanguageCode', [
            'segment' => $segment,
        ], $optional );
    }

}
