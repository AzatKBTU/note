<?php

declare(strict_types=1);

namespace App\Module\Note\Handlers;

use App\Module\Note\Commands\UpdateNoteCommand;
use App\Module\Note\Contracts\Queries\NoteQuery;
use App\Module\Note\Contracts\Repositories\UpdateNoteRepository;

final class UpdateNoteHandler
{
    public function __construct(
        private readonly NoteQuery $query,
        private readonly UpdateNoteRepository $repository
    ) {
    }

    public function handle(UpdateNoteCommand $command): void
    {
        $note = $this->query->findById($command->id);

        $note->title   = $command->DTO->title;
        $note->content = $command->DTO->content;

        $this->repository->update($note);
    }
}
