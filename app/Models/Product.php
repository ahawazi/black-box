<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guard_name = "web";

    public $guarded = [];


    // protected $fillable = [
    //     'title',
    //     'price',
    // ];

}
