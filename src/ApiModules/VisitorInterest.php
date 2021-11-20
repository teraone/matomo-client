<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait VisitorInterest {


    /**
     * MODULE: VISITOR INTEREST
     * Get the interests of the visitor
     */

    /**
     * Get the number of visits per visit duration
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getNumberOfVisitsPerDuration( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'VisitorInterest.getNumberOfVisitsPerVisitDuration', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the number of visits per visited page
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getNumberOfVisitsPerPage( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'VisitorInterest.getNumberOfVisitsPerPage', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the number of days elapsed since the last visit
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getNumberOfVisitsByDaySinceLast( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'VisitorInterest.getNumberOfVisitsByDaysSinceLast', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the number of visits by visit count
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getNumberOfVisitsByCount( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'VisitorInterest.getNumberOfVisitsByVisitCount', [
            'segment' => $segment,
        ], $optional );
    }

}
