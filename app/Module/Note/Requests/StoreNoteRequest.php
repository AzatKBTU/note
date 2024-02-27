<?php

declare(strict_types=1);

namespace App\Module\Note\Requests;

use App\Module\Note\DTO\StoreNoteDTO;
use Illuminate\Foundation\Http\FormRequest;

final class StoreNoteRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'   => ['required', 'string'],
            'content' => ['required', 'string']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'   => 'Нет тайтла',
            'content.required' => 'Нет контента'
        ];
    }

    public function getDTO(): StoreNoteDTO
    {
        return StoreNoteDTO::fromRequest($this);
    }
}
