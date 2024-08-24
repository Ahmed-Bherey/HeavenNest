<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'desc',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function real_estate()
    {
        return $this->hasMany(RealEstate::class, 'country_id');
    }
}
