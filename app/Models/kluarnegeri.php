<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kluarnegeri extends Model
{
    use HasFactory;
    protected $table = 'kln';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
