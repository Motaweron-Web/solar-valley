<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quotes';

    protected $fillable = [
        'who_install',
        'system_complete',
        'usage',
        'system_type',
        'panels_place',
        'your_roof',
        'message',
        'first_name',
        'last_name',
        'phone',
        'email',
        'prefer_contact',
        'address',
        'state',
        'city',
        'zip',
        'country',
    ];
}
