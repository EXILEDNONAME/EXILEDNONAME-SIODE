<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTimelinesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('profile_timelines', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_user')->unsigned();
      $table->text('timeline');
      $table->integer('active')->default(1);
      $table->integer('sort')->default(0);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('users');
  }
}
