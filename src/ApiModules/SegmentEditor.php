<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

trait SegmentEditor {


    /**
     * MODULE: SEGMENT EDITOR
     */

    /**
     * Check if current user can add new segments
     *
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function isUserCanAddNewSegment( array $optional = [] ): Response {
        return $this->request( 'SegmentEditor.isUserCanAddNewSegment', [], $optional );
    }

    /**
     * Delete a segment
     *
     * @param int $idSegment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function deleteSegment( int $idSegment, array $optional = [] ): Response {
        return $this->request( 'SegmentEditor.delete', [
            'idSegment' => $idSegment,
        ], $optional );
    }

    /**
     * Updates a segment
     *
     * @param int $idSegment
     * @param string $name
     * @param string $definition
     * @param string $autoArchive
     * @param string $enableAllUsers
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function updateSegment(
        int $idSegment,
        string $name,
        string $definition,
        string $autoArchive = '',
        string $enableAllUsers = '',
        array $optional = []
    ): Response {
        return $this->request( 'SegmentEditor.update', [
            'idSegment'      => $idSegment,
            'name'           => $name,
            'definition'     => $definition,
            'autoArchive'    => $autoArchive,
            'enableAllUsers' => $enableAllUsers,
        ], $optional );
    }

    /**
     * Updates a segment
     *
     * @param string $name
     * @param string $definition
     * @param string $autoArchive
     * @param string $enableAllUsers
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function addSegment( string $name, string $definition, string $autoArchive = '', string $enableAllUsers = '', array $optional = [] ): Response {
        return $this->request( 'SegmentEditor.add', [
            'name'           => $name,
            'definition'     => $definition,
            'autoArchive'    => $autoArchive,
            'enableAllUsers' => $enableAllUsers,
        ], $optional );
    }

    /**
     * Get a segment
     *
     * @param int $idSegment
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getSegment( int $idSegment, array $optional = [] ): Response {
        return $this->request( 'SegmentEditor.get', [
            'idSegment' => $idSegment,
        ], $optional );
    }

    /**
     * Get all segments
     *
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function getAllSegments( array $optional = [] ): Response {
        return $this->request( 'SegmentEditor.getAll', [], $optional );
    }

}
