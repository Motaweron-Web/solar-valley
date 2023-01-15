<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCats\Sku\HasSku;

class Product extends Model
{
    use HasFactory, HasSku;

    protected $table = 'products';

    protected $fillable = [
        'image',
        'title_ar',
        'title_en',
        'sub_title_ar',
        'sub_title_en',
        'sku',
        'category_id',
        'tags',
        'desc_ar',
        'desc_en',
        'part_number',
        'weight',
        'dimensions',
        'model_number',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
