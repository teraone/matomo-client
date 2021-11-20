<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait DevicesDetection {


    /**
     * MODULE: DEVICES DETECTION
     */

    /**
     * Get Device Type.
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDeviceType( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicesDetection.getType', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get Device Brand.
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDeviceBrand( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicesDetection.getBrand', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get Device Model.
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDeviceModel( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicesDetection.getModel', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get operating system families
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getOSFamilies( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicesDetection.getOsFamilies', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get os versions
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getOsVersions( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicesDetection.getOsVersions', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get browsers
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getBrowsers( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicesDetection.getBrowsers', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get browser versions
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getBrowserVersions( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicesDetection.getBrowserVersions', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get browser engines
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getBrowserEngines( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'DevicesDetection.getBrowserEngines', [
            'segment' => $segment,
        ], $optional );
    }

}
