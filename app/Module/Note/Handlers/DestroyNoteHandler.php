<?php

declare(strict_types=1);

namespace App\Module\Note\Handlers;

use App\Module\Note\Commands\DestroyNoteCommand;
use App\Module\Note\Contracts\Queries\NoteQuery;
use App\Module\Note\Contracts\Repositories\DeleteNoteRepository;

final class DestroyNoteHandler
{
    public function __construct(
        private readonly DeleteNoteRepository $repository,
        private readonly NoteQuery $query
    ) {
    }

    public function handle(DestroyNoteCommand $command): void
    {
        $note = $this->query->findById($command->id);

        $this->repository->destroy($note);
    }
}
