<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webinar extends Model
{
    use HasFactory;
    protected $table = 'webinar';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
