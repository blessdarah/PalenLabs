<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
       "package_category_id",
       "package_type_id",
       "comment"
    ];

    public function packageType(): BelongsTo
    {
        return $this->belongsTo(PackageType::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(PackageCategory::class, 'package_category_id');
    }

    public function tests(): HasMany
    {
        return $this->hasMany(TestEntry::class);
    }
}
