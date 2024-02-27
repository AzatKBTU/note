<?php

declare(strict_types=1);

namespace App\Module\Note\Contracts\Queries;

use App\Module\Note\DTO\NoteDTO;
use App\Module\Note\Models\Note;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface NoteQuery
{
    public function findById(int $id): Note;
    public function getAll(NoteDTO $DTO): LengthAwarePaginator;
}
