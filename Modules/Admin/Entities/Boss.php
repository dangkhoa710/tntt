<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Boss extends Model
{
    use HasFactory;

    protected $fillable = [];
    public $table = 'tbl_info';

    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\BossFactory::new();
    }
}
