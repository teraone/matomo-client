<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait SitesManager {


    /**
     * MODULE: SITES MANAGER
     * Manage sites
     */

    /**
     * Get the JS tag of the current site
     *
     * @param string $matomoUrl
     * @param string $mergeSubdomains
     * @param string $groupPageTitlesByDomain
     * @param string $mergeAliasUrls
     * @param string $visitorCustomVariables
     * @param string $pageCustomVariables
     * @param string $customCampaignNameQueryParam
     * @param string $customCampaignKeywordParam
     * @param string $doNotTrack
     * @param string $disableCookies
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getJavascriptTag(
        string $matomoUrl,
        string $mergeSubdomains = '',
        string $groupPageTitlesByDomain = '',
        string $mergeAliasUrls = '',
        string $visitorCustomVariables = '',
        string $pageCustomVariables = '',
        string $customCampaignNameQueryParam = '',
        string $customCampaignKeywordParam = '',
        string $doNotTrack = '',
        string $disableCookies = '',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'SitesManager.getJavascriptTag', [
            'piwikUrl'                     => $matomoUrl,
            'mergeSubdomains'              => $mergeSubdomains,
            'groupPageTitlesByDomain'      => $groupPageTitlesByDomain,
            'mergeAliasUrls'               => $mergeAliasUrls,
            'visitorCustomVariables'       => $visitorCustomVariables,
            'pageCustomVariables'          => $pageCustomVariables,
            'customCampaignNameQueryParam' => $customCampaignNameQueryParam,
            'customCampaignKeywordParam'   => $customCampaignKeywordParam,
            'doNotTrack'                   => $doNotTrack,
            'disableCookies'               => $disableCookies,
        ], $optional );
    }

    /**
     * Get image tracking code of the current site
     *
     * @param string $matomoUrl
     * @param string $actionName
     * @param string $idGoal
     * @param string $revenue
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getImageTrackingCode(
        string $matomoUrl,
        string $actionName = '',
        string $idGoal = '',
        string $revenue = '',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'SitesManager.getImageTrackingCode', [
            'piwikUrl'   => $matomoUrl,
            'actionName' => $actionName,
            'idGoal'     => $idGoal,
            'revenue'    => $revenue,
        ], $optional );
    }

    /**
     * Get sites from a group
     *
     * @param string $group
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesFromGroup( string $group, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesFromGroup', [
            'group' => $group,
        ], $optional );
    }

    /**
     * Get all site groups.
     * Requires superuser access.
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesGroups( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesGroups', [], $optional );
    }

    /**
     * Get information about the current site
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSiteInformation( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSiteFromId', [], $optional );
    }

    /**
     * Get urls from current site
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSiteUrls( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSiteUrlsFromId', [], $optional );
    }

    /**
     * Get all sites
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAllSites( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getAllSites', [], $optional );
    }

    /**
     * Get all sites with ID
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAllSitesId( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getAllSitesId', [], $optional );
    }

    /**
     * Get all sites where the current user has admin access
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesWithAdminAccess( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesWithAdminAccess', [], $optional );
    }

    /**
     * Get all sites where the current user has view access
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesWithViewAccess( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesWithViewAccess', [], $optional );
    }

    /**
     * Get all sites where the current user has at least view access
     *
     * @param string $limit
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesWithAtLeastViewAccess( string $limit = '', array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesWithAtLeastViewAccess', [
            'limit' => $limit,
        ], $optional );
    }

    /**
     * Get all sites with ID where the current user has admin access
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesIdWithAdminAccess( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesIdWithAdminAccess', [], $optional );
    }

    /**
     * Get all sites with ID where the current user has view access
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesIdWithViewAccess( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesIdWithViewAccess', [], $optional );
    }

    /**
     * Get all sites with ID where the current user has at least view access
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesIdWithAtLeastViewAccess( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesIdWithAtLeastViewAccess', [], $optional );
    }

    /**
     * Get a site by its URL
     *
     * @param string $url
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesIdFromSiteUrl( string $url, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSitesIdFromSiteUrl', [
            'url' => $url,
        ], $optional );
    }

    /**
     * Get a list of all available settings for a specific site.
     *
     * @return array|bool|null
     * @throws RequestException
     */
    public function getSiteSettings(): array|bool|null {
        return $this->request( 'SitesManager.getSiteSettings' );
    }

    /**
     * Add a website.
     * Requires Super User access.
     *
     * The website is defined by a name and an array of URLs.
     *
     * @param string $siteName Site name
     * @param string $urls Comma separated list of urls
     * @param string $ecommerce Is Ecommerce Reporting enabled for this website?
     * @param string $siteSearch
     * @param string $searchKeywordParameters Comma separated list of search keyword parameter names
     * @param string $searchCategoryParameters Comma separated list of search category parameter names
     * @param string $excludeIps Comma separated list of IPs to exclude from the reports (allows wildcards)
     * @param string $excludedQueryParameters
     * @param string $timezone Timezone string, eg. 'Europe/London'
     * @param string $currency Currency, eg. 'EUR'
     * @param string $group Website group identifier
     * @param string $startDate Date at which the statistics for this website will start. Defaults to today's date in
     *     YYYY-MM-DD format
     * @param string $excludedUserAgents
     * @param string $keepURLFragments If 1, URL fragments will be kept when tracking. If 2, they
     *                                 will be removed. If 0, the default global behavior will be used.
     * @param string $settingValues JSON serialized settings eg {settingName: settingValue, ...}
     * @param string $type The website type, defaults to "website" if not set.
     * @param string $excludeUnknownUrls Track only URL matching one of website URLs
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function addSite(
        string $siteName,
        string $urls,
        string $ecommerce = '',
        string $siteSearch = '',
        string $searchKeywordParameters = '',
        string $searchCategoryParameters = '',
        string $excludeIps = '',
        string $excludedQueryParameters = '',
        string $timezone = '',
        string $currency = '',
        string $group = '',
        string $startDate = '',
        string $excludedUserAgents = '',
        string $keepURLFragments = '',
        string $settingValues = '',
        string $type = '',
        string $excludeUnknownUrls = '',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'SitesManager.addSite', [
            'siteName'                 => $siteName,
            'urls'                     => $urls,
            'ecommerce'                => $ecommerce,
            'siteSearch'               => $siteSearch,
            'searchKeywordParameters'  => $searchKeywordParameters,
            'searchCategoryParameters' => $searchCategoryParameters,
            'excludeIps'               => $excludeIps,
            'excludedQueryParameters'  => $excludedQueryParameters,
            'timezone'                 => $timezone,
            'currency'                 => $currency,
            'group'                    => $group,
            'startDate'                => $startDate,
            'excludedUserAgents'       => $excludedUserAgents,
            'keepURLFragments'         => $keepURLFragments,
            'settingValues'            => $settingValues,
            'type'                     => $type,
            'excludeUnknownUrls'       => $excludeUnknownUrls,
        ], $optional );
    }

    /**
     * Delete current site
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function deleteSite( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.deleteSite', [], $optional );
    }

    /**
     * Add alias urls for the current site
     *
     * @param array $urls
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function addSiteAliasUrls( array $urls, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.addSiteAliasUrls', [
            'urls' => $urls,
        ], $optional );
    }

    /**
     * Set alias urls for the current site
     *
     * @param array $urls
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setSiteAliasUrls( array $urls, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setSiteAliasUrls', [
            'urls' => $urls,
        ], $optional );
    }

    /**
     * Get IP's for a specific range
     *
     * @param string $ipRange
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getIpsForRange( string $ipRange, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getIpsForRange', [
            'ipRange' => $ipRange,
        ], $optional );
    }

    /**
     * Set the global excluded IP's
     *
     * @param array $excludedIps
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setExcludedIps( array $excludedIps, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setGlobalExcludedIps', [
            'excludedIps' => $excludedIps,
        ], $optional );
    }

    /**
     * Set global search parameters
     *
     * @param $searchKeywordParameters
     * @param $searchCategoryParameters
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setGlobalSearchParameters( $searchKeywordParameters, $searchCategoryParameters, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setGlobalSearchParameters ', [
            'searchKeywordParameters'  => $searchKeywordParameters,
            'searchCategoryParameters' => $searchCategoryParameters,
        ], $optional );
    }

    /**
     * Get search keywords
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSearchKeywordParametersGlobal( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSearchKeywordParametersGlobal', [], $optional );
    }

    /**
     * Get search categories
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSearchCategoryParametersGlobal( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getSearchCategoryParametersGlobal', [], $optional );
    }

    /**
     * Get the global excluded query parameters
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExcludedParameters( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getExcludedQueryParametersGlobal', [], $optional );
    }

    /**
     * Get the global excluded user agents
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExcludedUserAgentsGlobal( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getExcludedUserAgentsGlobal', [], $optional );
    }

    /**
     * Set the global excluded user agents
     *
     * @param array $excludedUserAgents
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setGlobalExcludedUserAgents( array $excludedUserAgents, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setGlobalExcludedUserAgents', [
            'excludedUserAgents' => $excludedUserAgents,
        ], $optional );
    }

    /**
     * Check if site specific user agent exclude is enabled
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function isSiteSpecificUserAgentExcludeEnabled( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.isSiteSpecificUserAgentExcludeEnabled', [], $optional );
    }

    /**
     * Set site specific user agent exclude
     *
     * @param int $enabled
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setSiteSpecificUserAgentExcludeEnabled( int $enabled, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setSiteSpecificUserAgentExcludeEnabled', [
            'enabled' => $enabled,
        ], $optional );
    }

    /**
     * Check if the url fragments should be global
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getKeepURLFragmentsGlobal( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getKeepURLFragmentsGlobal', [], $optional );
    }

    /**
     * Set the url fragments global
     *
     * @param int $enabled
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setKeepURLFragmentsGlobal( int $enabled, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setKeepURLFragmentsGlobal', [
            'enabled' => $enabled,
        ], $optional );
    }

    /**
     * Set the global excluded query parameters
     *
     * @param array $excludedQueryParameters
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setExcludedParameters( array $excludedQueryParameters, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setGlobalExcludedQueryParameters', [
            'excludedQueryParameters' => $excludedQueryParameters,
        ], $optional );
    }

    /**
     * Get the global excluded IP's
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExcludedIps( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getExcludedIpsGlobal', [], $optional );
    }

    /**
     * Get the default currency
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDefaultCurrency( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getDefaultCurrency', [], $optional );
    }

    /**
     * Set the default currency
     *
     * @param string $defaultCurrency
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setDefaultCurrency( string $defaultCurrency, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setDefaultCurrency', [
            'defaultCurrency' => $defaultCurrency,
        ], $optional );
    }

    /**
     * Get the default timezone
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDefaultTimezone( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getDefaultTimezone', [], $optional );
    }

    /**
     * Set the default timezone
     *
     * @param string $defaultTimezone
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setDefaultTimezone( string $defaultTimezone, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.setDefaultTimezone', [
            'defaultTimezone' => $defaultTimezone,
        ], $optional );
    }

    /**
     * Update current site
     *
     * @param string $siteName
     * @param array $urls
     * @param bool|string $ecommerce
     * @param bool|string $siteSearch
     * @param string $searchKeywordParameters
     * @param string $searchCategoryParameters
     * @param array|string $excludeIps
     * @param array|string $excludedQueryParameters
     * @param string $timezone
     * @param string $currency
     * @param string $group
     * @param string $startDate
     * @param string $excludedUserAgents
     * @param string $keepURLFragments
     * @param string $type
     * @param string $settings
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function updateSite(
        string $siteName,
        array $urls,
        bool|string $ecommerce = '',
        bool|string $siteSearch = '',
        string $searchKeywordParameters = '',
        string $searchCategoryParameters = '',
        array|string $excludeIps = '',
        array|string $excludedQueryParameters = '',
        string $timezone = '',
        string $currency = '',
        string $group = '',
        string $startDate = '',
        string $excludedUserAgents = '',
        string $keepURLFragments = '',
        string $type = '',
        string $settings = '',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'SitesManager.updateSite', [
            'siteName'                 => $siteName,
            'urls'                     => $urls,
            'ecommerce'                => $ecommerce,
            'siteSearch'               => $siteSearch,
            'searchKeywordParameters'  => $searchKeywordParameters,
            'searchCategoryParameters' => $searchCategoryParameters,
            'excludeIps'               => $excludeIps,
            'excludedQueryParameters'  => $excludedQueryParameters,
            'timezone'                 => $timezone,
            'currency'                 => $currency,
            'group'                    => $group,
            'startDate'                => $startDate,
            'excludedUserAgents'       => $excludedUserAgents,
            'keepURLFragments'         => $keepURLFragments,
            'type'                     => $type,
            'settings'                 => $settings,
        ], $optional );
    }

    /**
     * Get a list with all available currencies
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getCurrencyList( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getCurrencyList', [], $optional );
    }

    /**
     * Get a list with all currency symbols
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getCurrencySymbols( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getCurrencySymbols', [], $optional );
    }

    /**
     * Get a list with available timezones
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getTimezonesList( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getTimezonesList', [], $optional );
    }

    /**
     * Unknown
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUniqueSiteTimezones( array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getUniqueSiteTimezones', [], $optional );
    }

    /**
     * Rename group
     *
     * @param string $oldGroupName
     * @param string $newGroupName
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function renameGroup( string $oldGroupName, string $newGroupName, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.renameGroup', [
            'oldGroupName' => $oldGroupName,
            'newGroupName' => $newGroupName,
        ], $optional );
    }

    /**
     * Get all sites which matches the pattern
     *
     * @param string $pattern
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getPatternMatchSites( string $pattern, array $optional = [] ): array|bool|null {
        return $this->request( 'SitesManager.getPatternMatchSites', [
            'pattern' => $pattern,
        ], $optional );
    }

}
