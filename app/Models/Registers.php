<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

class Register extends Model
{
    use HasFactory;
    protected $table = 'registers';
    protected $fillable = [
        'name' , 'email', 'password'
    ];
}
