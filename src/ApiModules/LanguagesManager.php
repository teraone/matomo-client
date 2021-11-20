<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait LanguagesManager {


    /**
     * MODULE: LANGUAGES MANAGER
     * Get plugin insights
     */

    /**
     * Check if matomo can generate insights for current period
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function canGenerateInsights( array $optional = [] ): array|bool|null {
        return $this->request( 'Insights.canGenerateInsights', [], $optional );
    }

    /**
     * Get insights overview
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getInsightsOverview( string $segment, array $optional = [] ): array|bool|null {
        return $this->request( 'Insights.getInsightsOverview', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get movers and shakers overview
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getMoversAndShakersOverview( string $segment, array $optional = [] ): array|bool|null {
        return $this->request( 'Insights.getMoversAndShakersOverview', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get movers and shakers
     *
     * @param int $reportUniqueId
     * @param string $segment
     * @param int $comparedToXPeriods
     * @param int $limitIncreaser
     * @param int $limitDecreaser
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getMoversAndShakers(
        int $reportUniqueId,
        string $segment,
        int $comparedToXPeriods = 1,
        int $limitIncreaser = 4,
        int $limitDecreaser = 4,
        array $optional = []
    ): array|bool|null {
        return $this->request( 'Insights.getMoversAndShakers', [
            'reportUniqueId'     => $reportUniqueId,
            'segment'            => $segment,
            'comparedToXPeriods' => $comparedToXPeriods,
            'limitIncreaser'     => $limitIncreaser,
            'limitDecreaser'     => $limitDecreaser,
        ], $optional );
    }

    /**
     * Get insights
     *
     * @param int $reportUniqueId
     * @param string $segment
     * @param int $limitIncreaser
     * @param int $limitDecreaser
     * @param string $filterBy
     * @param int $minImpactPercent (0-100)
     * @param int $minGrowthPercent (0-100)
     * @param int $comparedToXPeriods
     * @param string $orderBy
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getInsights(
        int $reportUniqueId,
        string $segment,
        int $limitIncreaser = 5,
        int $limitDecreaser = 5,
        string $filterBy = '',
        int $minImpactPercent = 2,
        int $minGrowthPercent = 20,
        int $comparedToXPeriods = 1,
        string $orderBy = 'absolute',
        array $optional = []
    ): array|bool|null {
        return $this->request( 'Insights.getInsights', [
            'reportUniqueId'     => $reportUniqueId,
            'segment'            => $segment,
            'limitIncreaser'     => $limitIncreaser,
            'limitDecreaser'     => $limitDecreaser,
            'filterBy'           => $filterBy,
            'minImpactPercent'   => $minImpactPercent,
            'minGrowthPercent'   => $minGrowthPercent,
            'comparedToXPeriods' => $comparedToXPeriods,
            'orderBy'            => $orderBy,
        ], $optional );
    }

    /**
     * MODULE: LANGUAGES MANAGER
     * Manage languages
     */

    /**
     * Proof if language is available
     *
     * @param string $languageCode
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getLanguageAvailable( string $languageCode, array $optional = [] ): array|bool|null {
        return $this->request( 'LanguagesManager.isLanguageAvailable', [
            'languageCode' => $languageCode,
        ], $optional );
    }

    /**
     * Get all available languages
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAvailableLanguages( array $optional = [] ): array|bool|null {
        return $this->request( 'LanguagesManager.getAvailableLanguages', [], $optional );
    }

    /**
     * Get all available languages with information
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAvailableLanguagesInfo( array $optional = [] ): array|bool|null {
        return $this->request( 'LanguagesManager.getAvailableLanguagesInfo', [], $optional );
    }

    /**
     * Get all available languages with their names
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAvailableLanguageNames( array $optional = [] ): array|bool|null {
        return $this->request( 'LanguagesManager.getAvailableLanguageNames', [], $optional );
    }

    /**
     * Get translations for a language
     *
     * @param string $languageCode
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getTranslations( string $languageCode, array $optional = [] ): array|bool|null {
        return $this->request( 'LanguagesManager.getTranslationsForLanguage', [
            'languageCode' => $languageCode,
        ], $optional );
    }

    /**
     * Get the language for the user with the login $login
     *
     * @param string $login
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getLanguageForUser( string $login, array $optional = [] ): array|bool|null {
        return $this->request( 'LanguagesManager.getLanguageForUser', [
            'login' => $login,
        ], $optional );
    }

    /**
     * Set the language for the user with the login $login
     *
     * @param string $login
     * @param string $languageCode
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setLanguageForUser( string $login, string $languageCode, array $optional = [] ): array|bool|null {
        return $this->request( 'LanguagesManager.setLanguageForUser', [
            'login'        => $login,
            'languageCode' => $languageCode,
        ], $optional );
    }

}
