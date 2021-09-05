<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'email', 'comment','produit_id',];

    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }
}
