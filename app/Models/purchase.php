<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendor_id'  ,
        'size' ,
        'article_no' , 
        'grade' ,
        'box' , 
        'packing' , 
        'measurement',
        'price' ,
        'total_price'
    ];

    public function vendor(){
        return $this->belongsTo(vendor::class);
    }
}
