<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitpenerangan extends Model
{
    use HasFactory;
    protected $table = 'upi';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
