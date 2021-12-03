<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_KyNang extends Model
{
    protected $KyNang = 'kynang';
    protected $primaryKey = 'makn';
    protected $keyType = 'string';
    protected $dateFormat = 'U';
    public $incrementing = false;
    public $timestamps = false;
}
