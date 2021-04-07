<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuario';

    /**
     * Run the migrations.
     * @table usuario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_usuario');
            $table->string('clave', 45)->nullable();
            $table->string('correo', 100)->nullable();
            $table->integer('fk_id_tipo_identificacion')->nullable();
            $table->string('identificacion', 100)->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuario_modificacion')->nullable();

            $table->index(["fk_id_tipo_identificacion"], 'fk_tipo_identificacion_usuario_idx');


            $table->foreign('fk_id_tipo_identificacion', 'fk_tipo_identificacion_usuario_idx')
                ->references('id_tipo_identificacion')->on('tipo_identificacion')
                ->onDelete('no action')
                ->onUpdate('no action');
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
