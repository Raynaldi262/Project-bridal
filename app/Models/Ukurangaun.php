<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukurangaun extends Model
{
    use HasFactory;
    protected $fillable = ['id_gauns','ukuran','deskripsi'];
}
