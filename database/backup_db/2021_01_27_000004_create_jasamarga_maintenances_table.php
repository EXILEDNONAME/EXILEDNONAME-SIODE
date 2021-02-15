<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasamargaMaintenancesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('jasamarga_maintenances', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_user')->unsigned();
      $table->timestamp('date_start')->nullable();
      $table->timestamp('date_end')->nullable();
      $table->string('title');
      $table->text('troubleshoot');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(0);
      $table->integer('status')->default(2);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->foreign('id_user')->references('id')->on('jasamarga_users')->onDelete('restrict')->onUpdate('restrict');
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
    Schema::dropIfExists('jasamarga_maintenances');
  }
}
