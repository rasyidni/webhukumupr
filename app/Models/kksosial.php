<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kksosial extends Model
{
    use HasFactory;
    protected $table = 'kkslh';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
