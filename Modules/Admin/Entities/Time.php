<?php

namespace Modules\Admin\Entities;
use Modules\Admin\Entities\Boss;
use Modules\Admin\Entities\Area;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [];
    public $table = 'tbl_timetable';
    public $timestamps = false;

    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\TimeFactory::new();
    }
    public function getInfoUser()
    {

        return $this->hasOne(Boss::class,'user_id','id');

    }
    public function getArea()
    {

        return $this->hasOne(Area::class,'id','area');

    }
}
