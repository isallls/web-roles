<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'price',
        'description',
        'owner',
        'product_id',
        'image',
        'last_edited_at',
    ];
    
    protected $casts = [

    ];
}
