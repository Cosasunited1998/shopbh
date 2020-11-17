<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPhieunhapdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_phieunhapdetail', function (Blueprint $table) {
            $table->increments('phieunhapDetail_id');
            $table->integer('phieunhap_id');
            $table->integer('nguyenlieu_id');
            $table->string('phieunhapDetail_cost');
            $table->integer('phieunhapDetail_nums');
            $table->text('phieunhapDetail_dvt');
            $table->string('phieunhapDetail_price');
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
        Schema::dropIfExists('tbl_phieunhapdetail');
    }
}
