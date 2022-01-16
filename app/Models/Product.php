<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }
    public function panier()
    {
        return $this->hasMany('App\Models\Panier');
    }
    protected $casts = [
        'id' => 'string',
    ];
}
