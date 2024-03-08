<?php

namespace App\Providers;

use App\Events\ChirpCreated;
use App\Events\OrderShipped;
use App\Listeners\SendChirpCreatedNotifications;
use App\Listeners\SendShipmentNotification;
use App\Listeners\UpdateShipmentStatus;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        OrderShipped::class => [
            SendShipmentNotification::class,
            UpdateShipmentStatus::class,
        ],

        ChirpCreated::class => [
            SendChirpCreatedNotifications::class,
        ],

        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }

//    protected function discoverEventsWithin(): array
//    {
//        return [
//            $this->app->path('Listeners'),
//        ];
//    }
}
