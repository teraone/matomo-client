<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait ExampleApi {


    /**
     * MODULE: EXAMPLE API
     * Get api and matomo information
     */

    /**
     * Get the matomo version
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleMatomoVersion( array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getMatomoVersion', [], $optional );
    }

    /**
     * http://en.wikipedia.org/wiki/Phrases_from_The_Hitchhiker%27s_Guide_to_the_Galaxy#The_number_42
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleAnswerToLife( array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getAnswerToLife', [], $optional );
    }

    /**
     * Unknown
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleObject( array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getObject', [], $optional );
    }

    /**
     * Get the sum of the parameters
     *
     * @param int $a
     * @param int $b
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleSum( int $a = 0, int $b = 0, array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getSum', [
            'a' => $a,
            'b' => $b,
        ], $optional );
    }

    /**
     * Returns nothing but the success of the request
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleNull( array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getNull', [], $optional );
    }

    /**
     * Get a short matomo description
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleDescriptionArray( array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getDescriptionArray', [], $optional );
    }

    /**
     * Get a short comparison with other analytic software
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleCompetitionDatatable( array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getCompetitionDatatable', [], $optional );
    }

    /**
     * Get information about 42
     * http://en.wikipedia.org/wiki/Phrases_from_The_Hitchhiker%27s_Guide_to_the_Galaxy#The_number_42
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleMoreInformationAnswerToLife( array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getMoreInformationAnswerToLife', [], $optional );
    }

    /**
     * Get a multidimensional array
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getExampleMultiArray( array $optional = [] ): array|bool|null {
        return $this->request( 'ExampleAPI.getMultiArray', [], $optional );
    }

}
