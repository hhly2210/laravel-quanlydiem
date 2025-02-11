<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HocSinh extends Model
{
    protected $table = 'hocsinh';
    protected $fillable = [
        'ID',
        'HoTen', 
        'ThoiGianCapNhap'
    ];
    use HasFactory;
}
