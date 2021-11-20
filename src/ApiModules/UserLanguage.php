<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

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
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUserLanguage( string $segment = '', array $optional = [] ): array|bool|null {
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
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUserLanguageCode( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'UserLanguage.getLanguageCode', [
            'segment' => $segment,
        ], $optional );
    }

}
