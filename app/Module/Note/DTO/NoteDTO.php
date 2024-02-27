<?php

declare(strict_types=1);

namespace App\Module\Note\DTO;

use App\Module\Note\Requests\NoteRequest;

final class NoteDTO
{
    public int $limit;
    public int $page;
    public ?string $title;
    public ?string $content;

    public static function fromRequest(NoteRequest $request): self
    {
        $self          = new self();
        $self->limit   = (int)$request->get('limit', 20);
        $self->page    = (int)$request->get('page', 1);
        $self->title   = $request->get('title');
        $self->content = $request->get('content');

        return $self;
    }

}
