<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait CustomReports
{


    /**
     * MODULE: Custom Reports
     * The Custom Reports API lets you 1) create custom reports within Matomo and 2) view the created reports in the Matomo Reporting UI or consume them via the API.
     *
     * You can choose between different visualizations (eg table or evolution graph) and combine hundreds of dimensions and metrics to get the data you nee
     */

    /**
     * Create a custom report
     *
     * @param string $name
     * @param string $reportType "table" or "evolution"
     * @param array $metricIds
     * @param array $dimensionIds
     * @param string $subcategoryId
     * @param string $description
     * @param string $segmentFilter
     * @param string|null $categoryId
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function addCustomReport(string      $name,
                                    string      $reportType,
                                    array       $metricIds = [],
                                    array       $dimensionIds = [],
                                    string      $subcategoryId = '',
                                    string      $description = '',
                                    string      $segmentFilter = '',
                                    string|null $categoryId = null,
                                    array       $optional = []): Response
    {


        return $this->request('CustomReports.addCustomReport', [
            'name' => $name,
            'reportType' => $reportType,
            'metricIds' => $metricIds,
            'categoryId' => $categoryId,
            'dimensionIds' => $dimensionIds,
            'subcategoryId' => $subcategoryId,
            'description' => $description,
            'segmentFilter' => $segmentFilter,
        ], $optional);
    }


    /**
     * Update a custom report
     *
     * @param int $idReport
     * @param string $name
     * @param string $reportType "table" or "evolution"
     * @param array $metricIds
     * @param array $dimensionIds
     * @param string $subcategoryId
     * @param string $description
     * @param string $segmentFilter
     * @param string|null $categoryId
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function updateCustomReport(int         $idReport,
                                       string      $name,
                                       string      $reportType,
                                       array       $metricIds = [],
                                       array       $dimensionIds = [],
                                       string      $subcategoryId = '',
                                       string      $description = '',
                                       string      $segmentFilter = '',
                                       string|null $categoryId = null,
                                       array       $optional = []): Response
    {
        return $this->request('CustomReports.updateCustomReport', [
            'idReport' => $idReport,
            'name' => $name,
            'reportType' => $reportType,
            'metricIds' => $metricIds,
            'categoryId' => $categoryId,
            'dimensionIds' => $dimensionIds,
            'subcategoryId' => $subcategoryId,
            'description' => $description,
            'segmentFilter' => $segmentFilter,
        ], $optional);
    }


    /**
     * Get all custom reports (alias of getConfiguredReports )
     *
     * @param bool $withCategoryMetadata
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function getCustomReports(bool $withCategoryMetadata = true, array $optional = []): Response
    {
        return $this->getConfiguredReports(!$withCategoryMetadata, $optional);
    }

    /**
     * Get all custom reports
     *
     * @param bool $skipCategoryMetadata
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function getConfiguredReports(bool $skipCategoryMetadata = false, array $optional = []): Response
    {
        return $this->request('CustomReports.getConfiguredReports', [
            'skipCategoryMetadata' => $skipCategoryMetadata ? '1' : '0',
        ], $optional);
    }

    /**
     * Get a custom report
     *
     * @param int $idCustomReport
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function getConfiguredReport(int $idCustomReport, array $optional = []): Response
    {
        return $this->request('CustomReports.getConfiguredReport', [
            'idCustomReport' => $idCustomReport
        ], $optional);
    }


    /**
     * Delete custom report
     *
     * @param int $idCustomReport
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function deleteCustomReport(int $idCustomReport, array $optional = []): Response
    {
        return $this->request('CustomReports.deleteCustomReport', [
            'idCustomReport' => $idCustomReport
        ], $optional);
    }

    /**
     * List all available categories for custom reports
     *
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function getAvailableCategoriesForCustomReports(array $optional = []): Response
    {
        return $this->request('CustomReports.getAvailableCategories', [], $optional);
    }

    /**
     * List all available report types for custom reports.
     * Usually only returns 'table' and 'evolution'
     *
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function getAvailableReportTypesForCustomReports(array $optional = []): Response
    {
        return $this->request('CustomReports.getAvailableReportTypes', [], $optional);
    }

    /**
     * List all available dimensions for custom reports.
     *
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function getAvailableDimensionsForCustomReports(array $optional = []): Response
    {
        return $this->request('CustomReports.getAvailableDimensions', [], $optional);
    }

    /**
     * List all available metrics for custom reports.
     *
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function getAvailableMetricsForCustomReports(array $optional = []): Response
    {
        return $this->request('CustomReports.getAvailableMetrics', [], $optional);
    }


    /**
     * Get the report.
     *
     * @param array $optional
     * @return Response
     * @throws RequestException
     */
    public function getCustomReport(
        int        $idCustomReport,
        string     $segment = '',
        bool       $expanded = true,
        bool       $flat = false,
        int|string $idSubtable = '',
        string     $columns = '',
        array      $optional = []): Response
    {
        return $this->request('CustomReports.getCustomReport', [
            'idCustomReport' => $idCustomReport,
            'segment' => $segment,
            'expanded' => $expanded,
            'flat' => $flat,
            'idSubtable' => $idSubtable,
            'columns' => $columns,
        ], $optional);
    }


}
