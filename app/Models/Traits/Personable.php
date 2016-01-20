<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;

trait Personable
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
