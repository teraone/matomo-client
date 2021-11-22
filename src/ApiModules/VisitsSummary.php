<?php

namespace Teraone\MatomoClient\ApiModules;

use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait VisitsSummary {


    /**
     * MODULE: VISITS SUMMARY
     * Get visit summary information
     */

    /**
     * Get a visit summary
     *
     * @param string $segment
     * @param string $columns
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getVisitsSummary( string $segment = '', string $columns = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.get', [
            'segment' => $segment,
            'columns' => $columns,
        ], $optional );
    }

    /**
     * Get visits
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getVisits( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getVisits', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get unique visits
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getUniqueVisitors( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getUniqueVisitors', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get user visit summary
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getUserVisitors( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getUsers', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get actions
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getActions( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getActions', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get max actions
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getMaxActions( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getMaxActions', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get bounce count
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getBounceCount( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getBounceCount', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get converted visits
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getVisitsConverted( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getVisitsConverted', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the sum of all visit lengths
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSumVisitsLength( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getSumVisitsLength', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the sum of all visit lengths formated in the current language
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSumVisitsLengthPretty( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'VisitsSummary.getSumVisitsLengthPretty', [
            'segment' => $segment,
        ], $optional );
    }
}
