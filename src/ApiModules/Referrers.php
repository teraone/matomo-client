<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait Referrers {


    /**
     * MODULE: REFERERS
     * Get information about the referrers
     */

    /**
     * Get referrer types
     *
     * @param string $segment
     * @param string $typeReferrer
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getReferrerType( string $segment = '', string $typeReferrer = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getReferrerType', [
            'segment'      => $segment,
            'typeReferrer' => $typeReferrer,
        ], $optional );
    }

    /**
     * Get all referrers
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAllReferrers( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getAll', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get referrer keywords
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getKeywords( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getKeywords', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get keywords for an url
     *
     * @param string $url
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getKeywordsForPageUrl( string $url, array $optional = [] ): Response {
        return $this->request( 'Referrers.getKeywordsForPageUrl', [
            'url' => $url,
        ], $optional );
    }

    /**
     * Get keywords for a page title
     *
     * @param string $title
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getKeywordsForPageTitle( string $title, array $optional = [] ): Response {
        return $this->request( 'Referrers.getKeywordsForPageTitle', [
            'title' => $title,
        ], $optional );
    }

    /**
     * Get search engines by keyword
     *
     * @param $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSearchEnginesFromKeywordId( $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getSearchEnginesFromKeywordId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get search engines
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSearchEngines( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getSearchEngines', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get search engines by search engine ID
     *
     * @param string $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getKeywordsFromSearchEngineId( string $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getKeywordsFromSearchEngineId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get campaigns
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getCampaigns( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getCampaigns', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get keywords by campaign ID
     *
     * @param $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getKeywordsFromCampaignId( $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getKeywordsFromCampaignId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get name
     * from advanced campaign reporting
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAdvancedCampaignReportingName( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'AdvancedCampaignReporting.getName', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get keyword content from name id
     * from advanced campaign reporting
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAdvancedCampaignReportingKeywordContentFromNameId( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'AdvancedCampaignReporting.getKeywordContentFromNameId', [
            'segment' => $segment
        ], $optional );
    }

    /**
     * Get keyword
     * from advanced campaign reporting
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAdvancedCampaignReportingKeyword( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'AdvancedCampaignReporting.getKeyword', [
            'segment' => $segment
        ], $optional );
    }

    /**
     * Get source     *
     * from advanced campaign reporting
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAdvancedCampaignReportingSource( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'AdvancedCampaignReporting.getSource', [
            'segment' => $segment
        ], $optional );
    }

    /**
     * Get medium
     * from advanced campaign reporting
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAdvancedCampaignReportingMedium( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'AdvancedCampaignReporting.getMedium', [
            'segment' => $segment
        ], $optional );
    }

    /**
     * Get content
     * from advanced campaign reporting
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAdvancedCampaignReportingContent( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'AdvancedCampaignReporting.getContent', [
            'segment' => $segment
        ], $optional );
    }

    /**
     * Get source and medium
     * from advanced campaign reporting
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAdvancedCampaignReportingSourceMedium( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'AdvancedCampaignReporting.getSourceMedium', [
            'segment' => $segment
        ], $optional );
    }

    /**
     * Get name from source and medium by ID
     * from advanced campaign reporting
     *
     * @param int $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAdvancedCampaignReportingNameFromSourceMediumId( int $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'AdvancedCampaignReporting.getNameFromSourceMediumId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment
        ], $optional );
    }

    /**
     * Get website referrerals
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getWebsites( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getWebsites', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get urls by website ID
     *
     * @param string $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getUrlsFromWebsiteId( string $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getUrlsFromWebsiteId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get social referrerals
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSocials( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getSocials', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get social referral urls
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getUrlsForSocial( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getUrlsForSocial', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the number of distinct search engines
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getNumberOfSearchEngines( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getNumberOfDistinctSearchEngines', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the number of distinct keywords
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getNumberOfKeywords( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getNumberOfDistinctKeywords', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the number of distinct campaigns
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getNumberOfCampaigns( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getNumberOfDistinctCampaigns', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the number of distinct websites
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getNumberOfWebsites( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getNumberOfDistinctWebsites', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get the number of distinct websites urls
     *
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getNumberOfWebsitesUrls( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Referrers.getNumberOfDistinctWebsitesUrls', [
            'segment' => $segment,
        ], $optional );
    }
}
