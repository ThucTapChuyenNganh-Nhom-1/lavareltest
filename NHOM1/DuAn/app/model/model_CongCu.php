<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_CongCu extends Model
{
    protected $CongCu = 'congcu';
    protected $primaryKey = 'macc';
    protected $keyType = 'string';
    protected $dateFormat = 'U';
    public $incrementing = false;
    public $timestamps = false;
}
