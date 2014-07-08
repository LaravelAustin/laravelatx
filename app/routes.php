<?php

Route::get('/', function () {
    $meetups   = (new Meetups)->getEvents();

    // TODO - Should put this in a db
    $resources = [
        [
            'name'        => 'Meetup.com - Laravel Austin',
            'url'         => 'http://www.meetup.com/Laravel-Austin',
            'description' => 'The Meetup.com page for the Laravel Austin group',
            'image' => '/img/meetup.png'
        ],
        [
            'name'        => 'Laravel.com',
            'url'         => 'http://laravel.com/',
            'description' => 'The home page for Laravel',
            'image' => '/img/laravel.png'
        ],
        [
            'name'        => 'LaraJobs',
            'url'         => 'http://larajobs.com/',
            'description' => 'The best place to find Laravel (and other) programming jobs.',
            'image' => '/img/larajobs.jpg'
        ],
        [
            'name'        => 'Laravel.IO',
            'url'         => 'http://laravel.io/forum',
            'description' => 'Forums, chat, and podcasts about Laravel and the Laravel community',
            'image' => '/img/laravelio.png'
        ],
        [
            'name' => 'Laravel News',
            'url' => 'http://laravel-news.com/',
            'description' => 'Blog and email newsletters with links to tons of great resources',
            'image' => '/img/laravelnews.png'
        ],
        [
            'name' => 'Laracasts',
            'url' => 'https://laracasts.com/',
            'description' => 'Short video tutorials about Laravel and more. Almost required watching for all Laravel/PHP devs.',
            'image' => '/img/laracasts.png'
        ],
        [
            'name' => 'Laravel Application Development Cookbook',
            'url' => 'http://bit.ly/laravelcookbook',
            'description' => 'Written by Terry (Laravel ATX meetup organizer), with short bits of usable Laravel code',
            'image' => '/img/cookbook.png'
        ],
        [
            'name' => 'Austin PHP Chat',
            'url' => 'http://austinphpchat.com/',
            'description' => 'IRC chat room where some in the Austin PHP and Laravel communities hang out',
            'image' => '/img/chat.png'
        ],
        [
            'name' => 'Austin PHP Meetup',
            'url' => 'http://www.meetup.com/austinphp/',
            'description' => 'Monthly meetup about all things PHP.  Meets every 2nd Thursday of the month.',
            'image' => '/img/meetup.png'
        ]

    ];

    return View::make('main')->withMeetups($meetups)->withResources($resources);
});

Route::get('notes', function() {
   return View::make('notes');
});


/**
 * Class Meetups
 * simple object to get meetup api
 */
class Meetups
{
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
        'status'         => 'upcoming',
        'order'          => 'time',
        'limited_events' => 'False',
        'group_urlname'  => 'Laravel-Austin',
        'desc'           => 'false',
        'offset'         => 0,
        'format'         => 'json',
        'page'           => 5,
        'key'            => '69531e157b5a67252736263226472a2e'
    ];


    /**
     * @return array
     */
    public function getEvents()
    {
        $return = [];
        $events = $this->sendRequest();
        foreach ($events as $event) {
            $date     = $event->time / 1000;
            $return[] = [
                'date'        => date('F d, Y', $date),
                'rsvps'       => $event->yes_rsvp_count,
                'url'         => $event->event_url,
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
        $url     = $this->base_url . $this->events_url . '?' . http_build_query($this->params);
        $return  = file_get_contents($url);
        $results = json_decode($return);

        return $results->results;
    }
}