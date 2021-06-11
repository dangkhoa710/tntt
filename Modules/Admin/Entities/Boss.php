<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\Rank;
use Modules\Admin\Entities\Position;
use Modules\Admin\Entities\Area;
use DB;
class Boss extends Model
{
    use HasFactory;

    protected $fillable = ['Boss'];
    public $table = 'tbl_info';
    public $timestamps = false;

    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\BossFactory::new();
    }
    public function getRank()
    {

        return $this->hasOne(Rank::class,'id','rank');

    }
    public function getPosition()
    {

        return $this->hasOne(Position::class,'id','position');

    }
    public function getArea()
    {

        return $this->hasOne(Area::class,'id','area');

    }
}
