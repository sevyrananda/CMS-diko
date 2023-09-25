<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['No', 'Judul', 'Content','Tanggal', 'Aksi'];

    public $incrementing = false;
    public $timestamps = true;
}
