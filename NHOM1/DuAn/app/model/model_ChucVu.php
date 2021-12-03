<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_ChucVu extends Model
{
    protected $ChucVu =  'chucvu';
    protected $primaryKey = 'macv';
    protected $keyType = 'string';
    protected $dateFormat = 'U';
    public $incrementing = false;
    public $timestamps = false;
}
