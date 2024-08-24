<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'country_id',
        'img',
        'title',
        'price',
        'desc',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
