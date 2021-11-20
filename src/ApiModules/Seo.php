<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Seo {


    /**
     * MODULE: SEO
     * Get SEO information
     */

    /**
     * Get the SEO rank of an url
     *
     * @param string $url
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSeoRank( string $url, array $optional = [] ): array|bool|null {
        return $this->request( 'SEO.getRank', [
            'url' => $url,
        ], $optional );
    }

}
