<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class winner extends Model
{
    protected $fillable = ['id_product', 'prix_final', 'name_winner'];
}
