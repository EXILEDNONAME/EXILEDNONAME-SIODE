<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasamargaIntercomesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('jasamarga_intercomes', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_location')->unsigned();
      $table->string('name');
      $table->integer('no_intercome');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(0);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
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
    Schema::dropIfExists('jasamarga_intercomes');
  }
}
