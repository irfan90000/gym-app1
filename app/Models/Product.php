<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'name',
        'title',
        'price',
        'status',
        'description'
    ];
    public function files(){
       return $this->hasMany(Media::class,'product_id','id');
    }
}
