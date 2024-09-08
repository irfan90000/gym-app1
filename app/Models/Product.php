<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_slug',
        'name',
        'title',
        'price',
        'status',
        'description'
    ];
    public function files(){
       return $this->hasMany(Media::class,'product_id','id');
    }

    public function file(){
        return $this->hasOne(Media::class,'product_id','id')->where('type','pdf');
    }
    public function media(){
        return $this->hasOne(Media::class,'product_id','id');
    }
    public function category(){
       return $this->belongsTo(Category::class,'category_slug','slug');
    }
}
