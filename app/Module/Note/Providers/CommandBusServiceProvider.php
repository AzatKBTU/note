<?php

declare(strict_types=1);

namespace App\Module\Note\Providers;

use App\Module\Note\Commands\CreateNoteCommand;
use App\Module\Note\Commands\DestroyNoteCommand;
use App\Module\Note\Commands\UpdateNoteCommand;
use App\Module\Note\Handlers\CreateNoteHandler;
use App\Module\Note\Handlers\DestroyNoteHandler;
use App\Module\Note\Handlers\UpdateNoteHandler;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;

final class CommandBusServiceProvider extends ServiceProvider
{
    private array $maps = [
        CreateNoteCommand::class  => CreateNoteHandler::class,
        UpdateNoteCommand::class  => UpdateNoteHandler::class,
        DestroyNoteCommand::class => DestroyNoteHandler::class,
    ];

    public function boot(): void
    {
        $this->registerHandlers();
    }

    public function registerHandlers(): void
    {
        Bus::map($this->maps);
    }
}
