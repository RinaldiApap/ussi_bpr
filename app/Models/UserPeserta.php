<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPeserta extends Model
{
    use HasFactory;
    protected $table = "user_peserta";
    protected $guarded = ['id'];
}
