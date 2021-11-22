<?php

namespace Teraone\MatomoClient\ApiModules;

use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait Actions {


    /**
     * MODULE: ACTIONS
     * Reports for visitor actions
     */

    /**
     * Get actions
     *
     * @param string $segment
     * @param string $columns
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAction( string $segment = '', string $columns = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.get', [
            'segment' => $segment,
            'columns' => $columns,
        ], $optional );
    }

    /**
     * Get page titles after a site search
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getPageTitlesFollowingSiteSearch( string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getPageTitlesFollowingSiteSearch', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get entry page urls
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getEntryPageUrls( string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getEntryPageUrls', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get page url information
     *
     * @param string $pageUrl The page url
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getPageUrl( string $pageUrl, string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getPageUrl', [
            'pageUrl' => $pageUrl,
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get page titles
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getPageTitles( string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getPageTitles', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get entry page urls
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getEntryPageTitles( string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getEntryPageTitles', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get exit page urls
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExitPageTitles( string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getExitPageTitles', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get page titles
     *
     * @param string $pageName The page name
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getPageTitle( string $pageName, string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getPageTitle', [
            'pageName' => $pageName,
            'segment'  => $segment,
        ], $optional );
    }

    /**
     * Get downloads
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDownloads( string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getDownloads', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get download information
     *
     * @param string $downloadUrl URL of the download
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDownload( string $downloadUrl, string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getDownload', [
            'downloadUrl' => $downloadUrl,
            'segment'     => $segment,
        ], $optional );
    }

    /**
     * Get outlinks
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getOutlinks( string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getOutlinks', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get outlink information
     *
     * @param string $outlinkUrl URL of the outlink
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getOutlink( string $outlinkUrl, string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getOutlink', [
            'outlinkUrl' => $outlinkUrl,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get the site search keywords
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSiteSearchKeywords( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Actions.getSiteSearchKeywords', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get search keywords with no search results
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSiteSearchNoResultKeywords( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Actions.getSiteSearchNoResultKeywords', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get site search categories
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSiteSearchCategories( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Actions.getSiteSearchCategories', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get page urls
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    protected function getPageUrls( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Actions.getPageUrls', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get page URLs after a site search
     *
     * @param string $segment
     * @param array $optional
     *
     * @return bool|array|null
     * @throws RequestException
     */
    protected function getPageUrlsFollowingSiteSearch( string $segment = '', array $optional = [] ): bool|array|null {
        return $this->request( 'Actions.getPageUrlsFollowingSiteSearch', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get exit page urls
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    protected function getExitPageUrls( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Actions.getExitPageUrls', [
            'segment' => $segment,
        ], $optional );
    }
}
