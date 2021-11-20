<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait ExamplePlugin {


    /**
     * MODULE: EXAMPLE PLUGIN
     */

    /**
     * Get a multidimensional array
     *
     * @param int $truth
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExamplePluginAnswerToLife( int $truth = 1, array $optional = [] ): array|bool|null {
        return $this->request( 'ExamplePlugin.getAnswerToLife', [
            'truth' => $truth,
        ], $optional );
    }

    /**
     * Get a multidimensional array
     *
     * @param string $segment
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExamplePluginReport( string $segment = '', array $optional = [] ): array|bool|null {
        return $this->request( 'ExamplePlugin.getExampleReport', [
            'segment' => $segment,
        ], $optional );
    }

}
