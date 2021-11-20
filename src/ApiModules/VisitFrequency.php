<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

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
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getVisitFrequency( string $segment = '', string $columns = '', array $optional = [] ): array|bool|null {
        return $this->request( 'VisitFrequency.get', [
            'segment' => $segment,
            'columns' => $columns,
        ], $optional );
    }
}
