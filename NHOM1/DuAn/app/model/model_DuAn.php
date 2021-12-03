<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_DuAn extends Model
{
    protected $DuAn = 'duan';
    protected $primaryKey = 'mada';
    protected $keyType = 'string';
    protected $dateFormat = 'U';
    public $incrementing = false;
    public $timestamps = false;
}
