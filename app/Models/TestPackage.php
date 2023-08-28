<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestPackage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
       "name",
       "description",
       "price",
       "type",
       "theme",
       "icon",
       "image",
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(PackageType::class);
    }
}
