<?php

namespace App\Models;

use App\Models\Store;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password'];

    public function stores()
    {
        return $this->hasMany(Store::class);
    }
    
    protected $casts = [
        'password' => 'hashed',
    ];
}