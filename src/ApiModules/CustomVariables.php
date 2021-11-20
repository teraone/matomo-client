<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait CustomVariables {


    /**
     * MODULE: CUSTOM VARIABLES
     * Custom variable information
     */

    /**
     * Get custom variables
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array|bool|null
     * @throws RequestException
     */
    public function getCustomVariables( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'CustomVariables.getCustomVariables', [
            'segment' => $segment,
        ], $optional );
    }

    /**
     * Get information about a custom variable
     *
     * @param int $idSubtable
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getCustomVariable( int $idSubtable, string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'CustomVariables.getCustomVariablesValuesFromNameId', [
            'idSubtable' => $idSubtable,
            'segment'    => $segment,
        ], $optional );
    }

}
