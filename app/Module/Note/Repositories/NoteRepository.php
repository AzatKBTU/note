<?php

declare(strict_types=1);

namespace App\Module\Note\Repositories;

use App\Module\Note\Contracts\Repositories\CreateNoteRepository;
use App\Module\Note\Contracts\Repositories\DeleteNoteRepository;
use App\Module\Note\Contracts\Repositories\UpdateNoteRepository;
use App\Module\Note\Models\Note;
use Throwable;

final class NoteRepository implements CreateNoteRepository, UpdateNoteRepository, DeleteNoteRepository
{

    /**
     * @throws Throwable
     */
    public function create(Note $note): void
    {
        $note->saveOrFail();
    }

    /**
     * @throws Throwable
     */
    public function update(Note $note): void
    {
        $note->saveOrFail();
    }

    public function destroy(Note $note): void
    {
        $note->delete();
    }
}
