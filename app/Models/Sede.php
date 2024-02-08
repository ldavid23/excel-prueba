<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Sede extends Model
{
    public function user(){
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
