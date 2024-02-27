<?php

declare(strict_types=1);

namespace App\Module\Note\Providers;

use App\Module\Note\Contracts\Repositories\CreateNoteRepository;
use App\Module\Note\Contracts\Repositories\DeleteNoteRepository;
use App\Module\Note\Contracts\Repositories\UpdateNoteRepository;
use App\Module\Note\Repositories\NoteRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        CreateNoteRepository::class => NoteRepository::class,
        UpdateNoteRepository::class => NoteRepository::class,
        DeleteNoteRepository::class => NoteRepository::class,
    ];
}
