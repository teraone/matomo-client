<?php

namespace Teraone\MatomoClient;

use DateTime;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Psr\Log\InvalidArgumentException;
use Teraone\MatomoClient\ApiModules\Actions;
use Teraone\MatomoClient\ApiModules\Annotations;
use Teraone\MatomoClient\ApiModules\Contents;
use Teraone\MatomoClient\ApiModules\CustomAlerts;
use Teraone\MatomoClient\ApiModules\CustomDimensions;
use Teraone\MatomoClient\ApiModules\CustomVariables;
use Teraone\MatomoClient\ApiModules\Dashboard;
use Teraone\MatomoClient\ApiModules\DevicePlugins;
use Teraone\MatomoClient\ApiModules\DevicesDetection;
use Teraone\MatomoClient\ApiModules\Events;
use Teraone\MatomoClient\ApiModules\ExampleApi;
use Teraone\MatomoClient\ApiModules\ExamplePlugin;
use Teraone\MatomoClient\ApiModules\Feedback;
use Teraone\MatomoClient\ApiModules\Goals;
use Teraone\MatomoClient\ApiModules\LanguagesManager;
use Teraone\MatomoClient\ApiModules\Live;
use Teraone\MatomoClient\ApiModules\MediaAnalytics;
use Teraone\MatomoClient\ApiModules\Metadata;
use Teraone\MatomoClient\ApiModules\MobileMessaging;
use Teraone\MatomoClient\ApiModules\MultiSites;
use Teraone\MatomoClient\ApiModules\Overlay;
use Teraone\MatomoClient\ApiModules\Provider;
use Teraone\MatomoClient\ApiModules\Referrers;
use Teraone\MatomoClient\ApiModules\Resolution;
use Teraone\MatomoClient\ApiModules\ScheduledReports;
use Teraone\MatomoClient\ApiModules\SegmentEditor;
use Teraone\MatomoClient\ApiModules\Seo;
use Teraone\MatomoClient\ApiModules\SitesManager;
use Teraone\MatomoClient\ApiModules\Transitions;
use Teraone\MatomoClient\ApiModules\UserCountry;
use Teraone\MatomoClient\ApiModules\UserLanguage;
use Teraone\MatomoClient\ApiModules\UsersManager;
use Teraone\MatomoClient\ApiModules\VisitFrequency;
use Teraone\MatomoClient\ApiModules\VisitorInterest;
use Teraone\MatomoClient\ApiModules\VisitsSummary;
use Teraone\MatomoClient\ApiModules\VisitTime;

class MatomoClient {
    use Actions,
        Annotations,
        Contents,
        CustomAlerts,
        CustomDimensions,
        CustomVariables,
        Dashboard,
        DevicePlugins,
        DevicesDetection,
        Events,
        ExampleApi,
        ExamplePlugin,
        Feedback,
        Goals,
        LanguagesManager,
        Live,
        MediaAnalytics,
        Metadata,
        MobileMessaging,
        MultiSites,
        Overlay,
        Provider,
        Referrers,
        Resolution,
        ScheduledReports,
        SegmentEditor,
        Seo,
        SitesManager,
        Transitions,
        UserCountry,
        UserLanguage,
        UsersManager,
        VisitFrequency,
        VisitorInterest,
        VisitsSummary,
        VisitTime;

    const PERIODS = [
        self::PERIOD_DAY,
        self::PERIOD_MONTH,
        self::PERIOD_WEEK,
        self::PERIOD_YEAR,
        self::PERIOD_RANGE
    ];

    const PERIOD_DAY = 'day';
    const PERIOD_WEEK = 'week';
    const PERIOD_MONTH = 'month';
    const PERIOD_YEAR = 'year';
    const PERIOD_RANGE = 'range';


    private string $period = self::PERIOD_DAY;

    private int $filterLimit = 100;

    private string $language = 'en';

    private Carbon $rangeStart;

    private Carbon|null $rangeEnd = null;

    private PendingRequest | Http $pendingRequest;

    public function __construct() {

        $this->rangeStart = now();
        $this->pendingRequest = new Http();
    }

    /**
     * Use this function to set custom headers. For example $client->setBaseRequest(Http::withHeaders(...))
     *
     * @param PendingRequest $pendingRequest
     *
     * @return $this
     */
    public function setBaseRequest(PendingRequest $pendingRequest):self {
        $this->pendingRequest = $pendingRequest;

        return $this;
    }

    /**
     * Set the period and range for the report.
     *
     * @param DateTime $from
     * @param string|null $period $default to self::PERIOD_DAY
     * @param DateTime|null $until defaults to now() if $period is RANGE
     *
     * @return $this
     */
    public function setDate( DateTime $from, ?string $period = self::PERIOD_DAY, DateTime $until = null ): self {

        $this->rangeStart = Carbon::make($from);

        $this->setPeriod( $period );

        if ( $until === null ) {
            $this->rangeEnd = null;
        } else {
            if ( $until < $from ) {
                throw  new InvalidArgumentException( 'Invalid Range: $until must not be earlier then $from' );
            }
            $this->rangeEnd = Carbon::make($until);
        }

        return $this;
    }



    /**
     * @return int
     */
    public function getFilterLimit(): int {
        return $this->filterLimit;
    }

    /**
     * @param int $filterLimit
     *
     * @return MatomoClient
     */
    public function setFilterLimit( int $filterLimit ): self {
        $this->filterLimit = $filterLimit;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return MatomoClient
     */
    public function setLanguage( string $language ): self {
        $this->language = $language;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    private function setPeriod( string $period ): self {
        if ( ! in_array( $period, self::PERIODS ) ) {
            throw  new InvalidArgumentException( 'Invalid Period given' );
        }
        $this->period = $period;

        return $this;
    }

    /**
     * Make API request
     *
     * @param string $method HTTP method
     * @param array $params Query parameters
     * @param array $optional Optional arguments for this api call
     *
     * @return Response
     * @throws RequestException
     * @throws RequestException
     * @throws RequestException
     */
    private function request( string $method, array $params = [], array $optional = [] ): Response {
        $url = config( 'matomo-client.site_url' ) . $this->parseUrl( $method, $params + $optional );

        if ( config( 'matomo-client.log_enabled' ) ) {
            Log::channel( config( 'matomo-client.log_channel' ) )->debug( '[MatomoClient] Sending request', [ 'url' => Str::replace( config( 'matomo-client.token' ), '{TOKEN_REDACTED}', $url ) ] );
        }

        $response = $this->pendingRequest->get( $url );

        if ( config( 'matomo-client.log_enabled' ) ) {
            Log::channel( config( 'matomo-client.log_channel' ) )->debug( '[MatomoClient] Response', [
                'status' => $response->status(),
                'body'   => $response->body()
            ] );
        }

        if ( config( 'matomo-client.log_enabled' ) ) {
            if ( $response->clientError() ) {
                Log::channel( config( 'matomo-client.log_channel' ) )->debug( '[MatomoClient] Client Error', [
                    'status' => $response->status(),
                    'body'   => $response->body()
                ] );

            } else if ( $response->serverError() ) {
                Log::channel( config( 'matomo-client.log_channel' ) )->debug( '[MatomoClient] Server Error', [
                    'status' => $response->status(),
                    'body'   => $response->body()
                ] );
            } else if ( ! $response->successful() ) {
                Log::channel( config( 'matomo-client.log_channel' ) )->debug( '[MatomoClient] Error', [
                    'status' => $response->status(),
                    'body'   => $response->body()
                ] );
            }
        }

        $response->throw();

        return $response;

    }

    /**
     * Create request url with parameters
     *
     * @param string $method The request method
     * @param array $params Request params
     *
     * @return string
     * @throws InvalidArgumentException
     */
    public function parseUrl( string $method, array $params = [] ): string {
        $params = [
                      'module'       => 'API',
                      'method'       => $method,
                      'token_auth'   => config( 'matomo-client.token' ),
                      'idSite'       => config( 'matomo-client.site_id' ),
                      'period'       => $this->period,
                      'format'       => 'json',
                      'language'     => $this->language,
                      'filter_limit' => $this->filterLimit
                  ] + $params;

        if ( ! empty( $this->rangeEnd ) ) {
            $params = $params + [
                    'date' => $this->rangeStart->format( 'Y-m-d' ) . ',' . $this->rangeEnd->format( 'Y-m-d' ),
                ];
        } else {
            $params = $params + [
                    'date' => $this->rangeStart->format( 'Y-m-d' ),
                ];
        }

        return  '?' . http_build_query($params);

    }

}
