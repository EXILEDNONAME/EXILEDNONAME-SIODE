<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBroadcastGeneralsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('broadcast_generals', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title')->nullable();
      $table->integer('time_slide_1')->default('15');
      $table->integer('time_slide_2')->default('15');
      $table->string('logo')->nullable();
      $table->string('header')->nullable();
      $table->string('header_r')->nullable();
      $table->string('header_l')->nullable();
      $table->string('content')->nullable();
      $table->string('content_r')->nullable();
      $table->string('content_l')->nullable();
      $table->string('footer')->nullable();
      $table->string('footer_r')->nullable();
      $table->string('footer_l')->nullable();
      $table->string('running_text')->nullable();
      $table->integer('status')->default('1');
      $table->enum('active',['1', '2'])->default('1');
      $table->integer('sort')->default(NULL)->nullable();
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
    Schema::dropIfExists('broadcast_generals');
  }
}
