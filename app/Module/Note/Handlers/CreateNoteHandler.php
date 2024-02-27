<?php

declare(strict_types=1);

namespace App\Module\Note\Handlers;

use App\Module\Note\Commands\CreateNoteCommand;
use App\Module\Note\Contracts\Repositories\CreateNoteRepository;
use App\Module\Note\Models\Note;

final class CreateNoteHandler
{
    public function __construct(
        private readonly CreateNoteRepository $repository
    ) {
    }

    public function handle(CreateNoteCommand $command): void
    {
        $note          = new Note();
        $note->title   = $command->DTO->title;
        $note->content = $command->DTO->content;

        $this->repository->create($note);
    }
}
