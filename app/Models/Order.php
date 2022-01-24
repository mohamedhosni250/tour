<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =['user_id' , 'name' , 'email' , 'package_name' , 'order_date' , 'number' , 'total','adult_count','child_count','pickup_location'];
}
