<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPeserta extends Model
{
    use HasFactory;
    protected $table = "t_peserta";
    protected $guarded = ['id'];
}
