<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ksekretariat extends Model
{
    use HasFactory;
    protected $table = 'ks';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
