<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [];
    public $table      = 'tbl_position';
    public $timestamps = false;

    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\PositionFactory::new();
    }
}
