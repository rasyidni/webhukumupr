<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    use HasFactory;
    protected $table = 'donasi';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
