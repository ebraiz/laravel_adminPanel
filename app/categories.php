<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    // protected $table = 'customers_list';
    // protected $primaryKey = 'customer_id';
    public $timestamps = false;
    protected $fillable = ['category_id','category_name','user_id','image_path'];
}
