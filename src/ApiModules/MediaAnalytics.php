<?php

namespace Teraone\MatomoClient\ApiModules;


use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

/**
 * Module MediaAnalytics
 * The MediaAnalytics API lets you request your reports about how your Video and Audio are accessed and viewed on your websites and apps. Some methods return Real Time information (similarly to the Live! API), while others return all your videos and audios and their key metrics.
 *
 * The real time methods can return information about the last N minutes (or last N hours). They include the following:
 *
 * the method getCurrentNumPlays returns the number of video plays (and audio plays) in the last N minutes
 * the method getCurrentSumTimeSpent returns the total time users spent playing your media in the last N minutes
 * the method getCurrentMostPlays returns the most popular videos in the last N minutes.
 *
 *
 * The other methods return the aggregated analytics reports for Video and Audio:
 *
 * MediaAnalytics.get returns the overall metrics for your videos and audios: nb_plays, nb_unique_visitors_plays, nb_impressions, nb_unique_visitors_impressions, nb_finishes, sum_total_time_watched, sum_total_audio_plays, sum_total_audio_impressions, sum_total_video_plays, sum_total_video_impressions, play_rate, finish_rate, impression_rate.
 * getVideoTitles and getAudioTitles return the list of videos / audio by video title and audio title.
 * getGroupedVideoResources and getGroupedAudioResources return the list of watched videos / audio grouped by resource URL. The "grouped media resource" report displays a flat report which includes both the domain and the path to the media resource, whereas the regular "media resource" report displays a hierarchical view of your media resources by domain.
 * getVideoHours and getAudioHours return the list of videos / audio  by hour (to see how your media is consumed at a different time of the day).
 * getVideoTitles and getAudioTitles return the list of videos / audio by video title and audio title.
 * getVideoResolutions return the list of videos by player resolution (see how your videos are consumed when the video resolution varies).
 * getPlayers return the watched media by media player.
 */
trait MediaAnalytics {

    /**
     * MODULE: MEDIA ANALYTICS
     * Get Media Analytics Plugin Statistics
     */

    /**
     * Get information about multiple sites
     *
     * @param string $segment
     * @param string $columns
     * @param array $optional
     *
     * @return Response
     * @throws RequestException
     */
    public function get( string $segment = '', string $columns = '', array $optional = [] ): Response {
        return $this->request( 'MediaAnalytics.get', [
            'segment' => $segment,
            'columns' => $columns,
        ], $optional );
    }

    /*
    - MediaAnalytics.hasRecords (idSite) [ Example in XML, Json, Tsv (Excel) ]
    - MediaAnalytics.get (idSite, period, date, segment = '', columns = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getCurrentNumPlays (idSite, lastMinutes, segment = '') [ Example in XML, Json, Tsv (Excel) ]
    - MediaAnalytics.getCurrentSumTimeSpent (idSite, lastMinutes, segment = '') [ Example in XML, Json, Tsv (Excel) ]
    - MediaAnalytics.getCurrentMostPlays (idSite, lastMinutes, filter_limit = '5', segment = '') [ Example in XML, Json, Tsv (Excel) ]
    - MediaAnalytics.getVideoResources (idSite, period, date, segment = '', idSubtable = '', secondaryDimension = '', expanded = '', flat = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getAudioResources (idSite, period, date, segment = '', idSubtable = '', secondaryDimension = '', expanded = '', flat = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getVideoTitles (idSite, period, date, segment = '', idSubtable = '', secondaryDimension = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getAudioTitles (idSite, period, date, segment = '', idSubtable = '', secondaryDimension = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getGroupedVideoResources (idSite, period, date, segment = '', idSubtable = '', secondaryDimension = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getGroupedAudioResources (idSite, period, date, segment = '', idSubtable = '', secondaryDimension = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getVideoHours (idSite, period, date, segment = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getAudioHours (idSite, period, date, segment = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getVideoResolutions (idSite, period, date, segment = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    - MediaAnalytics.getPlayers (idSite, period, date, segment = '') [ Example in XML, Json, Tsv (Excel) , RSS of the last 10 days ]
    */


}
