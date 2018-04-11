<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;
    protected $dates = ['deleted_at']; //开启deleted_at
    public $table='order';
    // public $timestamps = false;
}
