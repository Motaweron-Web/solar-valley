<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Product extends Model
{
    use HasFactory;

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

    protected $casts = [
        'tags' => 'json',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'  );
    }
}
