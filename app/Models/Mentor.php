<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mentor extends Model
{
    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
}
