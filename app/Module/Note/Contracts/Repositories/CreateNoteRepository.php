<?php

declare(strict_types=1);

namespace App\Module\Note\Contracts\Repositories;

use App\Module\Note\Models\Note;

interface CreateNoteRepository
{
    public function create(Note $note): void;
}
