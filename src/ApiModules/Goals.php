<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Goals {


    /**
     * MODULE: GOALS
     * Handle goals
     */

    /**
     * Get all goals
     *
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function getGoals( array $optional = [] ): bool|array {
        return $this->request( 'Goals.getGoals', [], $optional );
    }

    /**
     * Add a goal
     *
     * @param string $name
     * @param string $matchAttribute
     * @param string $pattern
     * @param string $patternType
     * @param string $caseSensitive
     * @param string $revenue
     * @param string $allowMultipleConversionsPerVisit
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function addGoal(
        string $name,
        string $matchAttribute,
        string $pattern,
        string $patternType,
        string $caseSensitive = '',
        string $revenue = '',
        string $allowMultipleConversionsPerVisit = '',
        array $optional = []
    ): bool|array {
        return $this->request( 'Goals.addGoal', [
            'name'                             => $name,
            'matchAttribute'                   => $matchAttribute,
            'pattern'                          => $pattern,
            'patternType'                      => $patternType,
            'caseSensitive'                    => $caseSensitive,
            'revenue'                          => $revenue,
            'allowMultipleConversionsPerVisit' => $allowMultipleConversionsPerVisit,
        ], $optional );
    }

    /**
     * Update a goal
     *
     * @param int $idGoal
     * @param string $name
     * @param string $matchAttribute
     * @param string $pattern
     * @param string $patternType
     * @param string $caseSensitive
     * @param string $revenue
     * @param string $allowMultipleConversionsPerVisit
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function updateGoal(
        int $idGoal,
        string $name,
        string $matchAttribute,
        string $pattern,
        string $patternType,
        string $caseSensitive = '',
        string $revenue = '',
        string $allowMultipleConversionsPerVisit = '',
        array $optional = []
    ): bool|array {
        return $this->request( 'Goals.updateGoal', [
            'idGoal'                           => $idGoal,
            'name'                             => $name,
            'matchAttribute'                   => $matchAttribute,
            'pattern'                          => $pattern,
            'patternType'                      => $patternType,
            'caseSensitive'                    => $caseSensitive,
            'revenue'                          => $revenue,
            'allowMultipleConversionsPerVisit' => $allowMultipleConversionsPerVisit,
        ], $optional );
    }

    /**
     * Delete a goal
     *
     * @param int $idGoal
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function deleteGoal( int $idGoal, array $optional = [] ): bool|array {
        return $this->request( 'Goals.deleteGoal', [
            'idGoal' => $idGoal,
        ], $optional );
    }

    /**
     * Get the SKU of the items
     *
     * @param string $abandonedCarts
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function getItemsSku( string $abandonedCarts, array $optional = [] ): bool|array {
        return $this->request( 'Goals.getItemsSku', [
            'abandonedCarts' => $abandonedCarts,
        ], $optional );
    }

    /**
     * Get the name of the items
     *
     * @param bool $abandonedCarts
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function getItemsName( bool $abandonedCarts, array $optional = [] ): bool|array {
        return $this->request( 'Goals.getItemsName', [
            'abandonedCarts' => $abandonedCarts,
        ], $optional );
    }

    /**
     * Get the categories of the items
     *
     * @param bool $abandonedCarts
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function getItemsCategory( bool $abandonedCarts, array $optional = [] ): bool|array {
        return $this->request( 'Goals.getItemsCategory', [
            'abandonedCarts' => $abandonedCarts,
        ], $optional );
    }

    /**
     * Get conversion rates from a goal
     *
     * @param string $segment
     * @param string $idGoal
     * @param array $columns
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function getGoal( string $segment = '', string $idGoal = '', array $columns = [], array $optional = [] ): bool|array {
        return $this->request( 'Goals.get', [
            'segment' => $segment,
            'idGoal'  => $idGoal,
            'columns' => $columns,
        ], $optional );
    }

    /**
     * Get information about a time period, and it's conversion rates
     *
     * @param string $segment
     * @param string $idGoal
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function getDaysToConversion( string $segment = '', string $idGoal = '', array $optional = [] ): bool|array {
        return $this->request( 'Goals.getDaysToConversion', [
            'segment' => $segment,
            'idGoal'  => $idGoal,
        ], $optional );
    }

    /**
     * Get information about how many site visits create a conversion
     *
     * @param string $segment
     * @param string $idGoal
     * @param array $optional
     *
     * @return bool|array
     * @throws RequestException
     */
    public function getVisitsUntilConversion( string $segment = '', string $idGoal = '', array $optional = [] ): bool|array {
        return $this->request( 'Goals.getVisitsUntilConversion', [
            'segment' => $segment,
            'idGoal'  => $idGoal,
        ], $optional );
    }
}
