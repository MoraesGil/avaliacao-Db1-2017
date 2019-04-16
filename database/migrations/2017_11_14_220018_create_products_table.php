<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('produtos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('label',90);
          $table->text('descricao')->nullable();
          $table->decimal('preco',7,2);
          $table->timestamp('criado_em')->nullable();
          $table->timestamp('atualizado_em')->nullable();
      });
  }
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::drop('produtos');
  }
}
