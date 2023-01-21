<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 
        'phone' , 
        'address'
    ];

    public function sale(){
        return $this->hasMany(sale::class)->withDefault();
    }
}
