<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPendaftaran extends Model
{
    use HasFactory;
    protected $table = "t_pendaftaran";
    protected $guarded = ['id'];
}
