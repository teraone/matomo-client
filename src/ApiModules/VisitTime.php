<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait VisitTime {

    /**
     * MODULE: VISIT TIME
     * Get visit time
     */

    /**
     * Get the visit by local time
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getVisitLocalTime( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'VisitTime.getVisitInformationPerLocalTime', [
            'segment' => $segment,
        ], $optional );
    }


    /**
     * Get the visit by server time
     *
     * @param string $segment
     * @param string $hideFutureHoursWhenToday Hide the future hours when the report is created for today
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getVisitServerTime( string $segment = '', string $hideFutureHoursWhenToday = '', array $optional = [] ): array|bool|null {
        return $this->request( 'VisitTime.getVisitInformationPerServerTime', [
            'segment'                  => $segment,
            'hideFutureHoursWhenToday' => $hideFutureHoursWhenToday,
        ], $optional );
    }

    /**
     * Get the visit by server time
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getByDayOfWeek( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'VisitTime.getByDayOfWeek', [
            'segment' => $segment,
        ], $optional );
    }


}
