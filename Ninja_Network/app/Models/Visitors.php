<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\ActiveScope;

class Visitors extends Model
{
    // protected static function booted()
    // {
    //     static::addGlobalScope(new ActiveScope());
    // }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}