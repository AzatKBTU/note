<?php

declare(strict_types=1);

namespace App\Module\Note\Resources;

use App\Http\Resources\BaseJsonResource;
use App\Module\Note\Models\Note;

/**
 * @property Note $resource
 */
final class ShowNoteResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id'      => $this->resource->id,
            'title'   => $this->resource->title,
            'content' => $this->resource->content
        ];
    }
}
