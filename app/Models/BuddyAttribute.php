<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuddyAttribute extends Model
{
    protected $fillable = ['label', 'type'];

    public function values()
    {
        return $this->hasMany(BuddyValue::class, 'attribute_id');
    }
}
