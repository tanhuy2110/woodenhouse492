<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public  $fillable = ['category_id', 'name', 'price', 'images', 'description'];
}
