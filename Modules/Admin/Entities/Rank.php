<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rank extends Model
{
    use HasFactory;

    protected $fillable = [];
    public $table      = 'tbl_rank';
    public $timestamps = false;

    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\RankFactory::new();
    }
}
