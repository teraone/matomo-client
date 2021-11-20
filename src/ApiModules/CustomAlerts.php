<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait CustomAlerts {


    /**
     * MODULE: CUSTOM ALERTS
     */

    /**
     * Get alert details
     *
     * @param int $idAlert
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAlert( int $idAlert, array $optional = [] ): array|bool|null {
        return $this->request( 'CustomAlerts.getAlert', [
            'idAlert' => $idAlert,
        ], $optional );
    }

    /**
     * Get values for alerts in the past
     *
     * @param int $idAlert
     * @param string $subPeriodN
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getValuesForAlertInPast( int $idAlert, string $subPeriodN, array $optional = [] ): array|bool|null {
        return $this->request( 'CustomAlerts.getValuesForAlertInPast', [
            'idAlert'    => $idAlert,
            'subPeriodN' => $subPeriodN,
        ], $optional );
    }

    /**
     * Get all alert details
     *
     * @param string $idSites Comma separated list of site IDs
     * @param string $ifSuperUserReturnAllAlerts
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAlerts( string $idSites, string $ifSuperUserReturnAllAlerts = '', array $optional = [] ): array|bool|null {
        return $this->request( 'CustomAlerts.getAlerts', [
            'idSites'                    => $idSites,
            'ifSuperUserReturnAllAlerts' => $ifSuperUserReturnAllAlerts,
        ], $optional );
    }

    /**
     * Add alert
     *
     * @param string $name
     * @param array $idSites Array of site IDs
     * @param boolean $emailMe
     * @param string $additionalEmails
     * @param string $phoneNumbers
     * @param string $metric
     * @param string $metricCondition
     * @param string $metricValue
     * @param string $comparedTo
     * @param string $reportUniqueId
     * @param string $reportCondition
     * @param string $reportValue
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function addAlert(
        string $name,
        array $idSites,
        bool $emailMe,
        string $additionalEmails,
        string $phoneNumbers,
        string $metric,
        string $metricCondition,
        string $metricValue,
        string $comparedTo,
        string $reportUniqueId,
        string $reportCondition = '',
        string $reportValue = '',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'CustomAlerts.addAlert', [
            'name'             => $name,
            'idSites'          => $idSites,
            'emailMe'          => $emailMe,
            'additionalEmails' => $additionalEmails,
            'phoneNumbers'     => $phoneNumbers,
            'metric'           => $metric,
            'metricCondition'  => $metricCondition,
            'metricValue'      => $metricValue,
            'comparedTo'       => $comparedTo,
            'reportUniqueId'   => $reportUniqueId,
            'reportCondition'  => $reportCondition,
            'reportValue'      => $reportValue,
        ], $optional );
    }

    /**
     * Edit alert
     *
     * @param int $idAlert
     * @param string $name
     * @param array $idSites Array of site IDs
     * @param bool $emailMe
     * @param string $additionalEmails
     * @param string $phoneNumbers
     * @param string $metric
     * @param string $metricCondition
     * @param string $metricValue
     * @param string $comparedTo
     * @param string $reportUniqueId
     * @param string $reportCondition
     * @param string $reportValue
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function editAlert(
        int $idAlert,
        string $name,
        array $idSites,
        bool $emailMe,
        string $additionalEmails,
        string $phoneNumbers,
        string $metric,
        string $metricCondition,
        string $metricValue,
        string $comparedTo,
        string $reportUniqueId,
        string $reportCondition = '',
        string $reportValue = '',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'CustomAlerts.editAlert', [
            'idAlert'          => $idAlert,
            'name'             => $name,
            'idSites'          => $idSites,
            'emailMe'          => $emailMe,
            'additionalEmails' => $additionalEmails,
            'phoneNumbers'     => $phoneNumbers,
            'metric'           => $metric,
            'metricCondition'  => $metricCondition,
            'metricValue'      => $metricValue,
            'comparedTo'       => $comparedTo,
            'reportUniqueId'   => $reportUniqueId,
            'reportCondition'  => $reportCondition,
            'reportValue'      => $reportValue,
        ], $optional );
    }

    /**
     * Delete Alert
     *
     * @param int $idAlert
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function deleteAlert( int $idAlert, array $optional = [] ): array|bool|null {
        return $this->request( 'CustomAlerts.deleteAlert', [
            'idAlert' => $idAlert,
        ], $optional );
    }

    /**
     * Get triggered alerts
     *
     * @param array $idSites
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getTriggeredAlerts( array $idSites, array $optional = [] ): array|bool|null {
        return $this->request( 'CustomAlerts.getTriggeredAlerts', [
            'idSites' => $idSites,
        ], $optional );
    }

}
