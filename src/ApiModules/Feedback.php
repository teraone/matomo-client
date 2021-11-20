<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;

trait Feedback {


    /**
     * MODULE: FEEDBACK
     */

    /**
     * Get a multidimensional array
     *
     * @param string $featureName
     * @param string $like
     * @param string $message
     * @param array $optional
     *
     * @return array | boolean | null
     * @throws RequestException
     */
    public function sendFeedbackForFeature( string $featureName, string $like, string $message = '', array $optional = [] ): array|bool|null {
        return $this->request( 'Feedback.sendFeedbackForFeature', [
            'featureName' => $featureName,
            'like'        => $like,
            'message'     => $message,
        ], $optional );
    }
}
