<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['title', 'body', 'category', 'date','time', 'condition', 'startingPrice','statut','image','id_user','new_price','winner'];

public function comments()
{
    return $this->hasMany(App\Comment);
}
}
