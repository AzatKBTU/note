<?php

declare(strict_types=1);

namespace App\Module\Note\Queries;

use App\Module\Note\DTO\NoteDTO;
use App\Module\Note\Models\Note;

use App\Module\Note\Contracts\Queries\NoteQuery as NoteQueryContract;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

final class NoteQuery implements NoteQueryContract
{
    public function findById(int $id): Note
    {
        /** @var Note $note */
        $note = Note::query()->find($id);

        return $note;
    }

    public function getAll(NoteDTO $DTO): LengthAwarePaginator
    {
        return Note::query()
            ->when($DTO->title, fn(Builder $query) => $query->where('title', 'LIKE', "%$DTO->title%"))
            ->when($DTO->content, fn(Builder $query) => $query->where('content', 'LIKE', "%$DTO->content%"))
            ->paginate($DTO->limit, ['*'], 'page', $DTO->page);
    }
}
