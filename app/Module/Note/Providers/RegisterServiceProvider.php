<?php

declare(strict_types=1);

namespace App\Module\Note\Providers;

use Illuminate\Support\ServiceProvider;

final class RegisterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(CommandBusServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);
        $this->app->register(QueryServiceProvider::class);
    }
}
