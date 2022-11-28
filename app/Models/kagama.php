<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kagama extends Model
{
    use HasFactory;
    protected $table = 'ka';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
