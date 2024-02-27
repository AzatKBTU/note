<?php

declare(strict_types=1);

namespace App\Module\Note\Requests;

use App\Module\Note\DTO\NoteDTO;
use Illuminate\Foundation\Http\FormRequest;

final class NoteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'limit'   => 'nullable',
            'page'    => 'nullable',
            'title'   => 'nullable',
            'content' => 'nullable'
        ];
    }

    public function getDTO(): NoteDTO
    {
        return NoteDTO::fromRequest($this);
    }
}
