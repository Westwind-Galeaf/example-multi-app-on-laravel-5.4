<?php

namespace Api\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Api\Events\Event' => [
            'Api\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your Apilication.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
