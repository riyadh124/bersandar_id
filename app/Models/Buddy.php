<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buddy extends Model
{
    protected $fillable = ['user_id', 'slug', 'rating_avg', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function values()
    {
        // Mengambil nilai atribut milik buddy ini
        return $this->hasMany(BuddyValue::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
