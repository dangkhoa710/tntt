<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\Rank;
use DB;
class Boss extends Model
{
    use HasFactory;

    protected $fillable = ['Boss'];
    public $table = 'tbl_info';

    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\BossFactory::new();
    }
    public function getRank()
    {

        return $this->hasOne(Rank::class,'id','rank');

    }
}
