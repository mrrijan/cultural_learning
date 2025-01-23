<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
