<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nip
 * @property string $name
 * @property string $address
 * @property string $zip
 */
class Company extends Model
{
    use HasFactory;
}
