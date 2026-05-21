<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;


#[Fillable(['message'])]

class Chirp extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);   

    }
}
