<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kajian extends Model
{
    use HasFactory;
    protected $table = 'kajian';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
