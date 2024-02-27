<?php

declare(strict_types=1);

namespace App\Module\Note\DTO;

use App\Module\Note\Requests\StoreNoteRequest;

final class StoreNoteDTO
{
    public string $title;
    public string $content;

    public static function fromRequest(StoreNoteRequest $request): self
    {
        $self = new self();

        $self->title   = $request->input('title');
        $self->content = $request->input('content');

        return $self;
    }
}
