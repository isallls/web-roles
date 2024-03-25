<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'uuid',
        'title',
        'price',
        'description',
        'owner',
        'image',
        'last_edited_at',
    ];
    
    protected $casts = [

    ];
}
