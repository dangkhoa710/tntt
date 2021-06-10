<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_info', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('fullname',100);
            $table->string('phone',100);
            $table->date('birth');
            $table->Integer('rank')->length(10); //cấp bậc
            $table->integer('star')->length(3); //số sao
            $table->integer('position')->length(10); //chức vụ
            $table->integer('area')->length(10); //khu vực hoạt động
            $table->integer('role')->length(10); //quyền
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_info');
    }
}
