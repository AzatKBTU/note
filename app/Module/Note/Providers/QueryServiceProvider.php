<?php

declare(strict_types=1);

namespace App\Module\Note\Providers;

use App\Module\Note\Contracts\Queries\NoteQuery as NoteQueryContract;
use App\Module\Note\Queries\NoteQuery;
use Illuminate\Support\ServiceProvider;

final class QueryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        NoteQueryContract::class => NoteQuery::class
    ];
}
