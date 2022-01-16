<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
    protected $casts = [
        'id' => 'string',
    ];
    public $incrementing = false;
}
