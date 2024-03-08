<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $fillable = [
        'role',
        'description',
        'role_id'
    ];
    public function user(){
        return  $this->hasMany(User::class);
    }
}
