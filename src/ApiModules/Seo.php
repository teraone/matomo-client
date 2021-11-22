<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

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
     * @return Response
     * @throws RequestException
     */
    public function getSeoRank( string $url, array $optional = [] ): Response {
        return $this->request( 'SEO.getRank', [
            'url' => $url,
        ], $optional );
    }

}
