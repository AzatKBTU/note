<?php

declare(strict_types=1);

namespace App\Module\Note\Commands;

final class DestroyNoteCommand
{
    public function __construct(
        public readonly int $id
    ) {
    }
}
