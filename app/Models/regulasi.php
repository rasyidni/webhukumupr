<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regulasi extends Model
{
    use HasFactory;
    protected $table = 'regulasi';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
