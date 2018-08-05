<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public  $fillable = ['name_customer', 'email', 'size', 'date', 'phone_number', 'message','ip_address'];
}
