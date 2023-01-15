<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'title_ar',
        'title_en',
        'sub_title_ar',
        'sub_title_en',
        'client_count',
        'hash_ar',
        'hash_en',
        'desc_ar',
        'desc_en',
    ];
}
