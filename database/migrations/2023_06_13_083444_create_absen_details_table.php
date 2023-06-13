<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('absen_id');
            $table->string('long');
            $table->string('lat');
            $table->string('alamat');
            $table->string('photo');
            $table->enum('type', ['in', 'out']);
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
        Schema::dropIfExists('absen_details');
    }
}
