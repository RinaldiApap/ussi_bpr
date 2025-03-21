<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TLembaga extends Model
{
    use HasFactory;
    protected $table = "t_lembaga";
    protected $guarded = ['id'];
}
