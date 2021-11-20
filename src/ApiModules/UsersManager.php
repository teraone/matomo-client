<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait UsersManager {


    /**
     * MODULE: USER MANAGER
     * Manage matomo users
     */

    /**
     * Set user preference
     *
     * @param string $userLogin Username
     * @param string $preferenceName
     * @param string $preferenceValue
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setUserPreference( string $userLogin, string $preferenceName, string $preferenceValue, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.setUserPreference', [
            'userLogin'       => $userLogin,
            'preferenceName'  => $preferenceName,
            'preferenceValue' => $preferenceValue,
        ], $optional );
    }

    /**
     * Get user preference
     *
     * @param string $userLogin Username
     * @param string $preferenceName
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUserPreference( string $userLogin, string $preferenceName, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUserPreference', [
            'userLogin'      => $userLogin,
            'preferenceName' => $preferenceName,
        ], $optional );
    }

    /**
     * Get user by username
     *
     * @param string $userLogins Comma separated list with usernames
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUsers( string $userLogins = '', array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUsers', [
            'userLogins' => $userLogins,
        ], $optional );
    }

    /**
     * Get all user logins
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUsersLogin( array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUsersLogin', [], $optional );
    }

    /**
     * Get sites by user access
     *
     * @param string $access
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUsersSitesFromAccess( string $access, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUsersSitesFromAccess', [
            'access' => $access,
        ], $optional );
    }

    /**
     * Get all users with access level from the current site
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUsersAccess( array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUsersAccessFromSite', [], $optional );
    }

    /**
     * Get all users with access $access to the current site
     *
     * @param string $access
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUsersWithSiteAccess( string $access, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUsersWithSiteAccess', [
            'access' => $access,
        ], $optional );
    }

    /**
     * Get site access from the user $userLogin
     *
     * @param string $userLogin Username
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSitesAccessFromUser( string $userLogin, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getSitesAccessFromUser', [
            'userLogin' => $userLogin,
        ], $optional );
    }

    /**
     * Get user by login
     *
     * @param string $userLogin Username
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUser( string $userLogin, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUser', [
            'userLogin' => $userLogin,
        ], $optional );
    }

    /**
     * Get user by email
     *
     * @param string $userEmail
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUserByEmail( string $userEmail, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUserByEmail', [
            'userEmail' => $userEmail,
        ], $optional );
    }

    /**
     * Add a user
     *
     * @param string $userLogin Username
     * @param string $password Password in clear text
     * @param string $email
     * @param string $alias
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function addUser( string $userLogin, string $password, string $email, string $alias = '', array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.addUser', [
            'userLogin' => $userLogin,
            'password'  => $password,
            'email'     => $email,
            'alias'     => $alias,
        ], $optional );
    }

    /**
     * Set superuser access
     *
     * @param string $userLogin Username
     * @param int $hasSuperUserAccess
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setSuperUserAccess( string $userLogin, int $hasSuperUserAccess, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.setSuperUserAccess', [
            'userLogin'          => $userLogin,
            'hasSuperUserAccess' => $hasSuperUserAccess,
        ], $optional );
    }

    /**
     * Check if user has superuser access
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function hasSuperUserAccess( array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.hasSuperUserAccess', [], $optional );
    }

    /**
     * Get a list of users with superuser access
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getUsersHavingSuperUserAccess( array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getUsersHavingSuperUserAccess', [], $optional );
    }

    /**
     * Update a user
     *
     * @param string $userLogin Username
     * @param string $password Password in clear text
     * @param string $email
     * @param string $alias
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function updateUser( string $userLogin, string $password = '', string $email = '', string $alias = '', array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.updateUser', [
            'userLogin' => $userLogin,
            'password'  => $password,
            'email'     => $email,
            'alias'     => $alias,
        ], $optional );
    }

    /**
     * Delete a user
     *
     * @param string $userLogin Username
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function deleteUser( string $userLogin, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.deleteUser', [
            'userLogin' => $userLogin,
        ], $optional );
    }

    /**
     * Checks if a user exist
     *
     * @param string $userLogin
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function userExists( string $userLogin, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.userExists', [
            'userLogin' => $userLogin,
        ], $optional );
    }

    /**
     * Checks if a user exist by email
     *
     * @param string $userEmail
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function userEmailExists( string $userEmail, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.userEmailExists', [
            'userEmail' => $userEmail,
        ], $optional );
    }

    /**
     * Grant access to multiple sites
     *
     * @param string $userLogin Username
     * @param string $access
     * @param array $idSites
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setUserAccess( string $userLogin, string $access, array $idSites, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.setUserAccess', [
            'userLogin' => $userLogin,
            'access'    => $access,
            'idSites'   => $idSites,
        ], $optional );
    }

    /**
     * Get the token for a user
     *
     * @param string $userLogin Username
     * @param string $md5Password Password in clear text
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getTokenAuth( string $userLogin, string $md5Password, array $optional = [] ): array|bool|null {
        return $this->request( 'UsersManager.getTokenAuth', [
            'userLogin'   => $userLogin,
            'md5Password' => md5( $md5Password ),
        ], $optional );
    }


}
