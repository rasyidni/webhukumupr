<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kwirausaha extends Model
{
    use HasFactory;
    protected $table = 'kk';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
