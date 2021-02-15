<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasamargaUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('jasamarga_users', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_device')->unsigned();
      $table->integer('id_location')->unsigned();
      $table->string('name');
      $table->string('npp')->nullable();
      $table->string('ip_address')->nullable();
      $table->string('mac_address')->nullable();
      $table->integer('port')->nullable();
      $table->string('pc_name')->nullable();
      $table->string('pc_password')->nullable();
      $table->integer('printer')->default(1);
      $table->text('description')->nullable();
      $table->integer('active')->default(0);
      $table->integer('sort')->default(0);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->foreign('id_device')->references('id')->on('jasamarga_devices')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_location')->references('id')->on('jasamarga_locations')->onDelete('restrict')->onUpdate('restrict');
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
    Schema::dropIfExists('jasamarga_users');
  }
}
