<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Annotations {


    /**
     * MODULE: ANNOTATIONS
     */

    /**
     * Add annotation
     *
     * @param string $note
     * @param int $starred
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function addAnnotation( string $note, int $starred = 0, array $optional = [] ): array|bool|null {
        return $this->request( 'Annotations.add', [
            'note'    => $note,
            'starred' => $starred,
        ], $optional );
    }

    /**
     * Save annotation
     *
     * @param int $idNote
     * @param string $note
     * @param string $starred
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function saveAnnotation( int $idNote, string $note = '', string $starred = '', array $optional = [] ): array|bool|null {
        return $this->request( 'Annotations.save', [
            'idNote'  => $idNote,
            'note'    => $note,
            'starred' => $starred,
        ], $optional );
    }

    /**
     * Delete annotation
     *
     * @param int $idNote
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function deleteAnnotation( int $idNote, array $optional = [] ): array|bool|null {
        return $this->request( 'Annotations.delete', [
            'idNote' => $idNote,
        ], $optional );
    }

    /**
     * Delete all annotations
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function deleteAllAnnotations( array $optional = [] ): array|bool|null {
        return $this->request( 'Annotations.deleteAll', [], $optional );
    }

    /**
     * Get annotation
     *
     * @param int $idNote
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAnnotation( int $idNote, array $optional = [] ): array|bool|null {
        return $this->request( 'Annotations.get', [
            'idNote' => $idNote,
        ], $optional );
    }

    /**
     * Get all annotations
     *
     * @param string $lastN
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAllAnnotation( string $lastN = '', array $optional = [] ): array|bool|null {
        return $this->request( 'Annotations.getAll', [
            'lastN' => $lastN,
        ], $optional );
    }

    /**
     * Get number of annotation for current period
     *
     * @param int $lastN
     * @param string $getAnnotationText
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAnnotationCountForDates( int $lastN, string $getAnnotationText, array $optional = [] ): array|bool|null {
        return $this->request( 'Annotations.getAnnotationCountForDates', [
            'lastN'             => $lastN,
            'getAnnotationText' => $getAnnotationText
        ], $optional );
    }

}
