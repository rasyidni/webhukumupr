<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentangkami extends Model
{
    use HasFactory;
    protected $table = 'tentangkami';
    protected $guarded = [];
    protected $dates = ['updated_at'];
}
