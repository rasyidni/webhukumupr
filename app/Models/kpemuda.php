<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kpemuda extends Model
{
    use HasFactory;
    protected $table = 'kpo';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
