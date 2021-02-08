<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeskoUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('sesko_users', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_location')->unsigned();
      $table->integer('id_packet')->unsigned();
      $table->string('id_customer')->nullable();
      $table->string('name');
      $table->string('ip_address')->nullable();
      $table->string('mac_address')->nullable();
      $table->string('tv_username')->nullable();
      $table->string('tv_password')->nullable();
      $table->integer('tv_include')->default(1);
      $table->text('description')->nullable();
      $table->integer('active')->default(0);
      $table->integer('sort')->default(0);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->foreign('id_location')->references('id')->on('sesko_locations')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_packet')->references('id')->on('sesko_packets')->onDelete('restrict')->onUpdate('restrict');
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
    Schema::dropIfExists('sesko_users');
  }
}
