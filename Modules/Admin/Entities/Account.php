<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\Boss;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [];
    public $table      = 'tbl_users';
    public $timestamps = false;

    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\AccountFactory::new();
    }
    public function info()
    {
        return $this->belongsTo(Boss::class,'rank','id');
    }

}
