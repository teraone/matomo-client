<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Metadata {

    /**
     * MODULE: API
     * API metadata
     */

    /**
     * Get current matomo version
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getMatomoVersion( array $optional = [] ): array|bool|null {
        return $this->request( 'API.getMatomoVersion', [], $optional );
    }

    /**
     * Get current ip address (from the server executing this script)
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getIpFromHeader( array $optional = [] ): array|bool|null {
        return $this->request( 'API.getIpFromHeader', [], $optional );
    }

    /**
     * Get current settings
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSettings( array $optional = [] ): array|bool|null {
        return $this->request( 'API.getSettings', [], $optional );
    }

    /**
     * Get default metric translations
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDefaultMetricTranslations( array $optional = [] ): array|bool|null {
        return $this->request( 'API.getDefaultMetricTranslations', [], $optional );
    }

    /**
     * Get default metrics
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDefaultMetrics( array $optional = [] ): array|bool|null {
        return $this->request( 'API.getDefaultMetrics', [], $optional );
    }

    /**
     * Get default processed metrics
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDefaultProcessedMetrics( array $optional = [] ): array|bool|null {
        return $this->request( 'API.getDefaultProcessedMetrics', [], $optional );
    }

    /**
     * Get default metrics documentation
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDefaultMetricsDocumentation( array $optional = [] ): array|bool|null {
        return $this->request( 'API.getDefaultMetricsDocumentation', [], $optional );
    }

    /**
     * Get default metric translations
     *
     * @param array $sites Array with the ID's of the sites
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSegmentsMetadata( array $sites = [], array $optional = [] ): array|bool|null {
        return $this->request( 'API.getSegmentsMetadata', [
            'idSites' => $sites
        ], $optional );
    }

    /**
     * Get the url of the logo
     *
     * @param bool $pathOnly Return the url (false) or the absolute path (true)
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getLogoUrl( bool $pathOnly, array $optional = [] ): array|bool|null {
        return $this->request( 'API.getLogoUrl', [
            'pathOnly' => $pathOnly
        ], $optional );
    }

    /**
     * Get the url of the header logo
     *
     * @param bool $pathOnly Return the url (false) or the absolute path (true)
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getHeaderLogoUrl( bool $pathOnly, array $optional = [] ): array|bool|null {
        return $this->request( 'API.getHeaderLogoUrl', [
            'pathOnly' => $pathOnly
        ], $optional );
    }

    /**
     * Get metadata from the API
     *
     * @param string $apiModule Module
     * @param string $apiAction Action
     * @param array $apiParameters Parameters
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getMetadata( string $apiModule, string $apiAction, array $apiParameters = [], array $optional = [] ): array|bool|null {
        return $this->request( 'API.getMetadata', [
            'apiModule'     => $apiModule,
            'apiAction'     => $apiAction,
            'apiParameters' => $apiParameters,
        ], $optional );
    }

    /**
     * Get metadata from a report
     *
     * @param array $idSites Array with the ID's of the sites
     * @param string $hideMetricsDoc
     * @param string $showSubtableReports
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getReportMetadata(
        array $idSites,
        string $hideMetricsDoc = '',
        string $showSubtableReports = '',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'API.getReportMetadata', [
            'idSites'             => $idSites,
            'hideMetricsDoc'      => $hideMetricsDoc,
            'showSubtableReports' => $showSubtableReports,
        ], $optional );
    }

    /**
     * Get processed report
     *
     * @param string $apiModule Module
     * @param string $apiAction Action
     * @param string $segment
     * @param string $apiParameters
     * @param int|string $idGoal
     * @param bool|string $showTimer
     * @param string $hideMetricsDoc
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getProcessedReport(
        string $apiModule,
        string $apiAction,
        string $segment = '',
        string $apiParameters = '',
        int|string $idGoal = '',
        bool|string $showTimer = '1',
        string $hideMetricsDoc = '',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'API.getProcessedReport', [
            'apiModule'      => $apiModule,
            'apiAction'      => $apiAction,
            'segment'        => $segment,
            'apiParameters'  => $apiParameters,
            'idGoal'         => $idGoal,
            'showTimer'      => $showTimer,
            'hideMetricsDoc' => $hideMetricsDoc,
        ], $optional );
    }

    /**
     * Get Api
     *
     * @param string $segment
     * @param string $columns
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getApi( string $segment = '', string $columns = '', array $optional = [] ): array|bool|null {
        return $this->request( 'API.get', [
            'segment' => $segment,
            'columns' => $columns,
        ], $optional );
    }

    /**
     * Get row evolution
     *
     * @param $apiModule
     * @param $apiAction
     * @param string $segment
     * @param string $column
     * @param string $idGoal
     * @param string $legendAppendMetric
     * @param string $labelUseAbsoluteUrl
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getRowEvolution(
        $apiModule,
        $apiAction,
        string $segment = '',
        string $column = '',
        string $idGoal = '',
        string $legendAppendMetric = '1',
        string $labelUseAbsoluteUrl = '1',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'API.getRowEvolution', [
            'apiModule'           => $apiModule,
            'apiAction'           => $apiAction,
            'segment'             => $segment,
            'column'              => $column,
            'idGoal'              => $idGoal,
            'legendAppendMetric'  => $legendAppendMetric,
            'labelUseAbsoluteUrl' => $labelUseAbsoluteUrl,
        ], $optional );
    }

    /**
     * Get the result of multiple requests bundled together
     * Take as an argument an array of the API methods to send together
     * For example, ['API.get', 'Action.get', 'DeviceDetection.getType']
     *
     * @param array $methods
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getBulkRequest( array $methods = [], array $optional = [] ): array|bool|null {
        $urls = [];

        foreach ( $methods as $key => $method ) {
            $urls[ 'urls[' . $key . ']' ] = urlencode( 'method=' . $method );
        }

        return $this->request( 'API.getBulkRequest', $urls, $optional );
    }

    /**
     * Get a list of available widgets.
     *
     * @return array|bool|null
     * @throws RequestException
     */
    public function getWidgetMetadata(): array|bool|null {
        return $this->request( 'API.getWidgetMetadata' );
    }

    /**
     * Get a list of all available pages that exist including the widgets they include.
     *
     * @return array|bool|null
     * @throws RequestException
     */
    public function getReportPagesMetadata(): array|bool|null {
        return $this->request( 'API.getReportPagesMetadata' );
    }

    /**
     * Get suggested values for segments
     *
     * @param string $segmentName
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSuggestedValuesForSegment( string $segmentName, array $optional = [] ): array|bool|null {
        return $this->request( 'API.getSuggestedValuesForSegment', [
            'segmentName' => $segmentName,
        ], $optional );
    }

}
