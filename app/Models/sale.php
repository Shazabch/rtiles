<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id'  ,
        'size' ,
        'article_no' , 
        'grade' ,
        'box' , 
        'packing' , 
        'measurement',
        'price' ,
        'total_price'
    ];
}
