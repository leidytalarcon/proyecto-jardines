<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'rol';

    /**
     * Run the migrations.
     * @table rol
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_rol');
            $table->string('nombre', 100)->nullable();
            $table->string('descripcion')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuario_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
