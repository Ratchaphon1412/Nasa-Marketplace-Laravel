<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\SubCategory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_poster',
        'content',
        'sub_category_id',
        'owner_id'
    ];

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
