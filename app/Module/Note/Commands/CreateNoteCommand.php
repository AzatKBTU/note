<?php

declare(strict_types=1);

namespace App\Module\Note\Commands;

use App\Module\Note\DTO\StoreNoteDTO;

final class CreateNoteCommand
{
    public function __construct(
        public readonly StoreNoteDTO $DTO
    ) {
    }
}
