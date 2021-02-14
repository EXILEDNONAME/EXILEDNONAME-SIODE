<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('notifications', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_user')->unsigned();
      $table->text('method')->nullable();
      $table->text('name')->nullable();
      $table->text('description')->nullable();
      $table->timestamp('read_at')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
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
    Schema::dropIfExists('notifications');
  }
}
