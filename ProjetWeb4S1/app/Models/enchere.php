<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enchere extends Model
{
    protected $fillable = ['id_user', 'id_product', 'new_price', 'name_user', 'time_click'];

}
