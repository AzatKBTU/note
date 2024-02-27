<?php

declare(strict_types=1);

namespace App\Module\Note\Resources;

use App\Http\Resources\BaseResourceCollection;

final class NotesResource extends BaseResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => ShowNoteResource::collection($this)
        ];
    }
}
