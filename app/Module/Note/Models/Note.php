<?php

declare(strict_types=1);

namespace App\Module\Note\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
final class Note extends Model
{

}
