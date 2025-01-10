<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
   use HasFactory;
    protected $fillable = [
        'admin_id',
        'fruit_name',
        'fruit_price',
        'fruit_quantity',
        'fruit_image',
        'fruit_description',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
