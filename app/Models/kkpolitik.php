<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kkpolitik extends Model
{
    use HasFactory;
    protected $table = 'kkph';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
