<?php

namespace App\Providers;

use App\Events\AdVisitor;
use App\Listeners\IncreaseVisitor;
use App\Models\Profile;
use App\Models\User;
use App\Observers\UserObserver;
use App\Observers\UsersGroupObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // AdVisitor::class => [
        //     IncreaseVisitor::class,
        // ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);

        Event::listen(
            AdVisitor::class,
            [IncreaseVisitor::class, 'handle'],
        );
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
