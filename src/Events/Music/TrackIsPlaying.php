<?php

namespace Spatie\LaravelDashboard\Events\Music;

use Spatie\LaravelDashboard\Events\DashboardEvent;

class TrackIsPlaying extends DashboardEvent
{
    /** @var array */
    public $trackInfo;

    /** @var string */
    public $userName;

    public function __construct(array $trackInfo, string $userName)
    {
        $this->trackInfo = $trackInfo;
        $this->userName = $userName;
    }
}
