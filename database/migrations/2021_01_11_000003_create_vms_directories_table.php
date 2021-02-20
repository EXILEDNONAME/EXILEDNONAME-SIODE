<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVmsDirectoriesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('vms_directories', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_area')->unsigned();
      $table->integer('id_type')->unsigned();
      $table->string('name');
      $table->string('ip_address')->nullable();
      $table->string('mac_address')->nullable();
      $table->integer('port')->nullable();
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(0);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
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
    Schema::dropIfExists('vms_directories');
  }
}
