<?php

namespace App\Models\Interfaces;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

interface Personable
{
    public function user(): BelongsTo;
}
