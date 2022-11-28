<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kkajian extends Model
{
    use HasFactory;
    protected $table = 'kksa';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
