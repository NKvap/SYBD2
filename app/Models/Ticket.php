<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    use HasFactory;
    public function sessions(): BelongsTo
    {
        return $this->belongsTo(Session::class, 'session_id');
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}
