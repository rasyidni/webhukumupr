<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kkomunikasi extends Model
{
    use HasFactory;
    protected $table = 'kkmi';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
