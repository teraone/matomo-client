<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait ScheduledReports {


    /**
     * MODULE: SCHEDULED REPORTS
     * Manage pdf reports
     */

    /**
     * Add scheduled report
     *
     * @param string $description
     * @param string $period
     * @param string $hour
     * @param string $reportType
     * @param string $reportFormat
     * @param array $reports
     * @param string $parameters
     * @param string $idSegment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function addReport(
        string $description,
        string $period,
        string $hour,
        string $reportType,
        string $reportFormat,
        array $reports,
        string $parameters,
        string $idSegment = '',
        array $optional = []
    ): Response {
        return $this->request( 'ScheduledReports.addReport', [
            'description'  => $description,
            'period'       => $period,
            'hour'         => $hour,
            'reportType'   => $reportType,
            'reportFormat' => $reportFormat,
            'reports'      => $reports,
            'parameters'   => $parameters,
            'idSegment'    => $idSegment,
        ], $optional );
    }

    /**
     * Updated scheduled report
     *
     * @param int $idReport
     * @param string $description
     * @param string $period
     * @param string $hour
     * @param string $reportType
     * @param string $reportFormat
     * @param array $reports
     * @param string $parameters
     * @param string $idSegment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function updateReport(
        int $idReport,
        string $description,
        string $period,
        string $hour,
        string $reportType,
        string $reportFormat,
        array $reports,
        string $parameters,
        string $idSegment = '',
        array $optional = []
    ): Response {
        return $this->request( 'ScheduledReports.updateReport', [
            'idReport'     => $idReport,
            'description'  => $description,
            'period'       => $period,
            'hour'         => $hour,
            'reportType'   => $reportType,
            'reportFormat' => $reportFormat,
            'reports'      => $reports,
            'parameters'   => $parameters,
            'idSegment'    => $idSegment,
        ], $optional );
    }

    /**
     * Delete scheduled report
     *
     * @param int $idReport
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function deleteReport( int $idReport, array $optional = [] ): Response {
        return $this->request( 'ScheduledReports.deleteReport', [
            'idReport' => $idReport,
        ], $optional );
    }

    /**
     * Get list of scheduled reports
     *
     * @param string $idReport
     * @param string $ifSuperUserReturnOnlySuperUserReports
     * @param string $idSegment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getReports(
        string $idReport = '',
        string $ifSuperUserReturnOnlySuperUserReports = '',
        string $idSegment = '',
        array $optional = []
    ): Response {
        return $this->request( 'ScheduledReports.getReports', [
            'idReport'                              => $idReport,
            'ifSuperUserReturnOnlySuperUserReports' => $ifSuperUserReturnOnlySuperUserReports,
            'idSegment'                             => $idSegment,
        ], $optional );
    }

    /**
     * Get list of scheduled reports
     *
     * @param int $idReport
     * @param string $language
     * @param string $outputType
     * @param string $reportFormat
     * @param string $parameters
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function generateReport(
        int $idReport,
        string $language = '',
        string $outputType = '',
        string $reportFormat = '',
        string $parameters = '',
        array $optional = []
    ): Response {
        return $this->request( 'ScheduledReports.generateReport', [
            'idReport'     => $idReport,
            'language'     => $language,
            'outputType'   => $outputType,
            'reportFormat' => $reportFormat,
            'parameters'   => $parameters,
        ], $optional );
    }

    /**
     * Send scheduled reports
     *
     * @param int $idReport
     * @param string $force
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function sendReport( int $idReport, string $force = '', array $optional = [] ): Response {
        return $this->request( 'ScheduledReports.sendReport', [
            'idReport' => $idReport,
            'force'    => $force,
        ], $optional );
    }
}
