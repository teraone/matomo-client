<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait Transitions {

    /**
     * MODULE: TRANSITIONS
     * Get transitions for page URLs, titles and actions
     */

    /**
     * Get transitions for a page title
     *
     * @param $pageTitle
     * @param string $segment
     * @param string $limitBeforeGrouping
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getTransitionsForPageTitle( $pageTitle, string $segment = '', string $limitBeforeGrouping = '', array $optional = [] ): Response {
        return $this->request( 'Transitions.getTransitionsForPageTitle', [
            'pageTitle'           => $pageTitle,
            'segment'             => $segment,
            'limitBeforeGrouping' => $limitBeforeGrouping,
        ], $optional );
    }

    /**
     * Get transitions for a page URL
     *
     * @param $pageUrl
     * @param string $segment
     * @param string $limitBeforeGrouping
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getTransitionsForPageUrl( $pageUrl, string $segment = '', string $limitBeforeGrouping = '', array $optional = [] ): Response {
        return $this->request( 'Transitions.getTransitionsForPageTitle', [
            'pageUrl'             => $pageUrl,
            'segment'             => $segment,
            'limitBeforeGrouping' => $limitBeforeGrouping,
        ], $optional );
    }

    /**
     * Get transitions for a page URL
     *
     * @param $actionName
     * @param $actionType
     * @param string $segment
     * @param string $limitBeforeGrouping
     * @param string $parts
     * @param string $returnNormalizedUrls
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getTransitionsForAction(
        $actionName,
        $actionType,
        string $segment = '',
        string $limitBeforeGrouping = '',
        string $parts = 'all',
        string $returnNormalizedUrls = '',
        array $optional = []
    ): Response {
        return $this->request( 'Transitions.getTransitionsForAction', [
            'actionName'           => $actionName,
            'actionType'           => $actionType,
            'segment'              => $segment,
            'limitBeforeGrouping'  => $limitBeforeGrouping,
            'parts'                => $parts,
            'returnNormalizedUrls' => $returnNormalizedUrls,
        ], $optional );
    }

    /**
     * Get translations for the transitions
     *
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getTransitionsTranslations( array $optional = [] ): Response {
        return $this->request( 'Transitions.getTranslations', [], $optional );
    }
}
