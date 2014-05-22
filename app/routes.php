<?php

Route::get('/', function()
{
    $meetups = (new Meetups)->getEvents();
	return View::make('main')->withMeetups($meetups);
});

Route::get('irc', function()
{
    return View::make('irc');
});


/**
 * Class Meetups
 * simple object to get meetup api
 */
class Meetups {
    /**
     * @var string
     */
    var $base_url = 'http://api.meetup.com/';
    /**
     * @var string
     */
    var $events_url = '2/events';
    /**
     * @var array
     */
    var $params = [
        'status' => 'upcoming',
        'order' => 'time',
        'limited_events' => 'False',
        'group_urlname' => 'Laravel-Austin',
        'desc' => 'false',
        'offset' => 0,
        'format' => 'json',
        'page' => 5,
        'key' => '69531e157b5a67252736263226472a2e'
    ];


    /**
     * @return array
     */
    public function getEvents()
    {
        $return = [];
        $events = $this->sendRequest();
        foreach($events as $event) {
            $date = $event->time / 1000;
            $return[] = [
                'date' => date('F d, Y', $date),
                'rsvps' => $event->yes_rsvp_count,
                'url' => $event->event_url,
                'description' => $event->description
            ];
        }
        return $return;

    }

    /**
     * @return mixed
     */
    public function sendRequest()
    {
        $url = $this->base_url . $this->events_url . '?' . http_build_query($this->params);
        $return = file_get_contents($url);
        $results = json_decode($return);
        return $results->results;
    }
}