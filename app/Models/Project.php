<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function usersInterested(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'project_user_interested', 'project_id', 'user_id');
    }


    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
