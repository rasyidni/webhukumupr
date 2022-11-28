<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class granddesign extends Model
{
    use HasFactory;
    protected $table = 'grand_design';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
