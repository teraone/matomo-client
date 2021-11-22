<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait Events {

    /**
     * MODULE: EVENTS
     */

    /**
     * Get event categories
     *
     * @param string $segment
     * @param string $secondaryDimension ('eventAction' or 'eventName')
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getEventCategory( string $segment = '', string $secondaryDimension = '', array $optional = [] ): Response {
        return $this->request( 'Events.getCategory', [
            'segment'            => $segment,
            'secondaryDimension' => $secondaryDimension,
        ], $optional );
    }

    /**
     * Get event actions
     *
     * @param string $segment
     * @param string $secondaryDimension ('eventName' or 'eventCategory')
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getEventAction( string $segment = '', string $secondaryDimension = '', array $optional = [] ): Response {
        return $this->request( 'Events.getAction', [
            'segment'            => $segment,
            'secondaryDimension' => $secondaryDimension,
        ], $optional );
    }

    /**
     * Get event names
     *
     * @param string $segment
     * @param string $secondaryDimension ('eventAction' or 'eventCategory')
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getEventName( string $segment = '', string $secondaryDimension = '', array $optional = [] ): Response {
        return $this->request( 'Events.getName', [
            'segment'            => $segment,
            'secondaryDimension' => $secondaryDimension,
        ], $optional );
    }

    /**
     * Get action from category ID
     *
     * @param int $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getActionFromCategoryId( int $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Events.getActionFromCategoryId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get name from category ID
     *
     * @param int $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getNameFromCategoryId( int $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Events.getNameFromCategoryId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get category from action ID
     *
     * @param int $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getCategoryFromActionId( int $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Events.getCategoryFromActionId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get name from action ID
     *
     * @param int $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getNameFromActionId( int $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Events.getNameFromActionId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get action from name ID
     *
     * @param int $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getActionFromNameId( int $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Events.getActionFromNameId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

    /**
     * Get category from name ID
     *
     * @param int $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getCategoryFromNameId( int $idSubtable, string $segment = '', array $optional = [] ): Response {
        return $this->request( 'Events.getCategoryFromNameId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }
}
