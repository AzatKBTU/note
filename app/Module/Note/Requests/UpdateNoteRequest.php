<?php

namespace App\Module\Note\Requests;

use App\Module\Note\DTO\UpdateNoteDTO;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateNoteRequest extends FormRequest
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

    public function getDTO(): UpdateNoteDTO
    {
        return UpdateNoteDTO::fromRequest($this);
    }
}
