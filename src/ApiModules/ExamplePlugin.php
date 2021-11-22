<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

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
     * @return Response
     * @throws RequestException
     */
    public function getExamplePluginAnswerToLife( int $truth = 1, array $optional = [] ): Response {
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
     * @return Response
     * @throws RequestException
     */
    public function getExamplePluginReport( string $segment = '', array $optional = [] ): Response {
        return $this->request( 'ExamplePlugin.getExampleReport', [
            'segment' => $segment,
        ], $optional );
    }

}
