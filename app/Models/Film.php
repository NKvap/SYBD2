<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Film extends Model
{
    protected $table = 'films';
    public $timestamps = false;

    protected $fillable = ['name_film', 'category_id'];
    use HasFactory;
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function session(): HasMany
    {
        return $this->hasMany(Session::class);
    }
}
