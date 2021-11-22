<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait Live {


    /**
     * MODULE: LIVE
     * Request live data
     */

    /**
     * Get short information about the visit counts in the last minutes
     *
     * @param int $lastMinutes Default: 60
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getCounters( int $lastMinutes = 60, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Live.getCounters', [
            'lastMinutes' => $lastMinutes,
            'segment'     => $segment,
        ], $optional );
    }

    /**
     * Get information about the last visits
     *
     * @param string $segment
     * @param string $minTimestamp
     * @param string $doNotFetchActions
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     * @internal param int $filterLimit
     * @internal param int $maxIdVisit
     */
    public function getLastVisitsDetails( string $segment = '', string $minTimestamp = '', string $doNotFetchActions = '', array $optional = [] ): Response {
        return $this->request( 'Live.getLastVisitsDetails', [
            'segment'           => $segment,
            'minTimestamp'      => $minTimestamp,
            'doNotFetchActions' => $doNotFetchActions,
        ], $optional );
    }

    /**
     * Get a profile for a visitor
     *
     * @param string $visitorId
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getVisitorProfile( string $visitorId = '', string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Live.getVisitorProfile', [
            'visitorId' => $visitorId,
            'segment'   => $segment,
        ], $optional );
    }

    /**
     * Get the ID of the most recent visitor
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getMostRecentVisitorId( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Live.getMostRecentVisitorId', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get userId for visitors
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getUsersById( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'UserId.getUsers', [
            'segment' => $segment,
        ], $optional );
    }

}
