<?php

declare(strict_types=1);

namespace App\Module\Note\Commands;

use App\Module\Note\DTO\UpdateNoteDTO;

final class UpdateNoteCommand
{
    public function __construct(
        public readonly int $id,
        public readonly UpdateNoteDTO $DTO
    ) {
    }
}
