<?php

namespace Teraone\MatomoClient;


class ImageGraph {

    /**
     * MODULE: IMAGE GRAPH
     * Generate png graphs
     *
     *
     * const GRAPH_EVOLUTION = 'evolution';
     * const GRAPH_VERTICAL_BAR = 'verticalBar';
     * const GRAPH_PIE = 'pie';
     * const GRAPH_PIE_3D = '3dPie';
     *
     *
     */


    /**
     * Generate a png report
     *
     * @param string $apiModule Module
     * @param string $apiAction Action
     * @param string $graphType 'evolution', 'verticalBar', 'pie' or '3dPie'
     * @param string $outputType
     * @param string $columns
     * @param string $labels
     * @param string $showLegend
     * @param int|string $width
     * @param int|string $height
     * @param int|string $fontSize
     * @param string $legendFontSize
     * @param bool|string $aliasedGraph "by default, Graphs are "smooth" (anti-aliased). If you are
     *                              generating hundreds of graphs and are concerned with performance,
     *                              you can set aliasedGraph=0. This will disable anti aliasing and
     *                              graphs will be generated faster, but look less pretty."
     * @param string $idGoal
     * @param array $colors Use own colors instead of the default. The colors has to be in hexadecimal
     *                      value without '#'
     * @param array $optional
     *
     * @return bool|object
     */

    /*
     *
    NOT IMPLEMENTED

    public function getImageGraph(
         $apiModule,
         $apiAction,
         $graphType = '',
         $outputType = '0',
         $columns = '',
         $labels = '',
         $showLegend = '1',
         $width = '',
         $height = '',
         $fontSize = '9',
         $legendFontSize = '',
         $aliasedGraph = '1',
         $idGoal = '',
         $colors = [],
         array $optional = []
     )
     {

         return $this->request('ImageGraph.get', [
             'apiModule' => $apiModule,
             'apiAction' => $apiAction,
             'graphType' => $graphType,
             'outputType' => $outputType,
             'columns' => $columns,
             'labels' => $labels,
             'showLegend' => $showLegend,
             'width' => $width,
             'height' => $height,
             'fontSize' => $fontSize,
             'legendFontSize' => $legendFontSize,
             'aliasedGraph' => $aliasedGraph,
             'idGoal ' => $idGoal,
             'colors' => $colors,
         ], $optional, self::FORMAT_PHP);
     }*/

}
