<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait UserCountry {


    /**
     * MODULE: USER COUNTRY
     * Get visitors country information
     */

    /**
     * Get countries of all visitors
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getCountry( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'UserCountry.getCountry', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get a list of used country codes to country names
     *
     * @return Response
     * @throws RequestException
     */
    public function getCountryCodeMapping(): Response {
        return $this->request( 'UserCountry.getCountryCodeMapping' );
    }

    /**
     * Get continents of all visitors
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getContinent( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'UserCountry.getContinent', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get regions of all visitors
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getRegion( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'UserCountry.getRegion', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get cities of all visitors
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getCity( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'UserCountry.getCity', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get location from ip
     *
     * @param string $ip
     * @param string $provider
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getLocationFromIP( string $ip, string $provider = '', array $optional = [] ): Response {
        return $this->request( 'UserCountry.getLocationFromIP', [
            'ip'       => $ip,
            'provider' => $provider,
        ], $optional );
    }

    /**
     * Get the number of disting countries
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getCountryNumber( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'UserCountry.getNumberOfDistinctCountries', [
            'segment' => $segment,
        ], $optional );
    }

}
