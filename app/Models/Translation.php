<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    protected $fillable = [
        'locale',
        'slug',
        'name',
        'display_name',
        'keywords'
    ];
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
