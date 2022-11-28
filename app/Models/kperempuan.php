<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kperempuan extends Model
{
    use HasFactory;
    protected $table = 'kpp';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
