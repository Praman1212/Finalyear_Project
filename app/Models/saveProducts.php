<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saveProducts extends Model
{
    use HasFactory;
    protected $table = "add_products";
    protected $fillable = ['product_name','product_id','price','category','image'];
}
