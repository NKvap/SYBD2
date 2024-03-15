<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Session extends Model
{
    use HasFactory;
    public function halls(): BelongsTo
    {
        return $this->belongsTo(Hall::class,'hall_id');
    }
    public function films(): BelongsTo
    {
        return $this->belongsTo(Film::class, 'film_id');
    }
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
