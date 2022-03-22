<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image'
    ];
    public function products(){
        return $this->hasMany(Product::class , 'cate_id' , 'id');
    }
}
