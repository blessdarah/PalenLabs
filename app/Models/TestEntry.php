<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestEntry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'test_package_id',
        'lab_test_id',
        'gender',
        'comment'
    ];

    public function package(): BelongsTo
    {
        return $this->belongsTo(TestPackage::class, 'test_package_id');
    }

    public function labTest(): BelongsTo
    {
        return $this->belongsTo(LabTest::class, 'lab_test_id');
    }
}
