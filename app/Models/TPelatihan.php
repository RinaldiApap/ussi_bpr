<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPelatihan extends Model
{
    use HasFactory;
    protected $table = "t_pelatihan";
    protected $guarded = ['id'];
}
