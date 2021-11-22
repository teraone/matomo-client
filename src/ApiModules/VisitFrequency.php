<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait VisitFrequency {


    /**
     * MODULE: VISIT FREQUENCY
     * Get visit frequency
     */

    /**
     * Get the visit frequency
     *
     * @param string $segment
     * @param string $columns
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getVisitFrequency( string $segment = '', string $columns = '', array $optional = [] ): Response {
        return $this->request( 'VisitFrequency.get', [
            'segment' => $segment,
            'columns' => $columns,
        ], $optional );
    }
}
