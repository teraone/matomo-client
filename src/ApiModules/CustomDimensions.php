<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait CustomDimensions {


    /**
     * MODULE: Custom Dimensions
     * The Custom Dimensions API lets you manage and access reports for your configured Custom Dimensions.
     */

    /**
     * Fetch a report for the given idDimension. Only reports for active dimensions can be fetched. Requires at least
     * view access.
     *
     * @param int $idDimension
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getCustomDimension( int $idDimension, array $optional = [] ): array|bool|null {
        return $this->request( 'CustomDimensions.getCustomDimension', [
            'idDimension' => $idDimension,
        ], $optional );
    }

    /**
     * Configures a new Custom Dimension. Note that Custom Dimensions cannot be deleted, be careful when creating one
     * as you might run quickly out of available Custom Dimension slots. Requires at least Admin access for the
     * specified website. A current list of available `$scopes` can be fetched via the API method
     * `CustomDimensions.getAvailableScopes()`. This method will also contain information whether actually Custom
     * Dimension slots are available or whether they are all already in use.
     *
     * @param string $name The name of the dimension
     * @param string $scope Either 'visit' or 'action'. To get an up-to-date list of available scopes fetch the
     *                      API method `CustomDimensions.getAvailableScopes`
     * @param int $active '0' if dimension should be inactive, '1' if dimension should be active
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function configureNewCustomDimension( string $name, string $scope, int $active, array $optional = [] ): array|bool|null {
        return $this->request( 'CustomDimensions.configureNewCustomDimension', [
            'name'   => $name,
            'scope'  => $scope,
            'active' => $active,
        ], $optional );
    }

    /**
     * Updates an existing Custom Dimension. This method updates all values, you need to pass existing values of the
     * dimension if you do not want to reset any value. Requires at least Admin access for the specified website.
     *
     * @param int $idDimension The id of a Custom Dimension.
     * @param string $name The name of the dimension
     * @param int $active '0' if dimension should be inactive, '1' if dimension should be active
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function configureExistingCustomDimension( int $idDimension, string $name, int $active, array $optional = [] ): array|bool|null {
        return $this->request( 'CustomDimensions.configureExistingCustomDimension', [
            'idDimension' => $idDimension,
            'name'        => $name,
            'active'      => $active,
        ], $optional );
    }

    /**
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getConfiguredCustomDimensions(): array|bool|null {
        return $this->request( 'CustomDimensions.getConfiguredCustomDimensions', [
        ] );
    }

    /**
     * Get a list of all supported scopes that can be used in the API method
     * `CustomDimensions.configureNewCustomDimension`. The response also contains information whether more Custom
     * Dimensions can be created or not. Requires at least Admin access for the specified website.
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAvailableScopes(): array|bool|null {
        return $this->request( 'CustomDimensions.getAvailableScopes', [
        ] );
    }

    /**
     * Get a list of all available dimensions that can be used in an extraction. Requires at least Admin access
     * to one website.
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getAvailableExtractionDimensions(): array|bool|null {
        return $this->request( 'CustomDimensions.getAvailableExtractionDimensions', [
        ] );
    }
}
