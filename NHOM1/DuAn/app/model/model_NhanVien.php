<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_NhanVien extends Model
{
    protected $NhanVien = 'nhanvien';
    protected $primaryKey = 'manv';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
}
