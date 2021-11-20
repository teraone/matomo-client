<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait MobileMessaging {

    /**
     * MODULE: MOBILEMESSAGING
     * The MobileMessaging API lets you manage and access all the MobileMessaging plugin features
     * including : - manage SMS API credential - activate phone numbers - check remaining credits -
     * send SMS
     */

    /**
     * Checks if SMSAPI has been configured
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function areSMSAPICredentialProvided( array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.areSMSAPICredentialProvided', [], $optional );
    }

    /**
     * Get list with sms provider
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getSMSProvider( array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.getSMSProvider', [], $optional );
    }

    /**
     * Set SMSAPI credentials
     *
     * @param string $provider
     * @param string $apiKey
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setSMSAPICredential( string $provider, string $apiKey, array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.setSMSAPICredential', [
            'provider' => $provider,
            'apiKey'   => $apiKey,
        ], $optional );
    }

    /**
     * Add phone number
     *
     * @param string $phoneNumber
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function addPhoneNumber( string $phoneNumber, array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.addPhoneNumber', [
            'phoneNumber' => $phoneNumber,
        ], $optional );
    }

    /**
     * Get credits left
     *
     * @param array $optional
     *
     * @return array|bool|null
     * @throws RequestException
     */
    public function getCreditLeft( array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.getCreditLeft', [], $optional );
    }

    /**
     * Remove phone number
     *
     * @param string $phoneNumber
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function removePhoneNumber( string $phoneNumber, array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.removePhoneNumber', [
            'phoneNumber' => $phoneNumber,
        ], $optional );
    }

    /**
     * Validate phone number
     *
     * @param string $phoneNumber
     * @param string $verificationCode
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function validatePhoneNumber( string $phoneNumber, string $verificationCode, array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.validatePhoneNumber', [
            'phoneNumber'      => $phoneNumber,
            'verificationCode' => $verificationCode,
        ], $optional );
    }

    /**
     * Delete SMSAPI credentials
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function deleteSMSAPICredential( array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.deleteSMSAPICredential', [], $optional );
    }

    /**
     * Unknown
     *
     * @param $delegatedManagement
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function setDelegatedManagement( $delegatedManagement, array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.setDelegatedManagement', [
            'delegatedManagement' => $delegatedManagement,
        ], $optional );
    }

    /**
     * Unknown
     *
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function getDelegatedManagement( array $optional = [] ): array|bool|null {
        return $this->request( 'MobileMessaging.getDelegatedManagement', [], $optional );
    }

}
