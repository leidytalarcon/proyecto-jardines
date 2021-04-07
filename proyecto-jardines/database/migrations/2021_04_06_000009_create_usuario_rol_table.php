<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuario_rol';

    /**
     * Run the migrations.
     * @table usuario_rol
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_usuario_rol');
            $table->integer('fk_id_usuario')->nullable();
            $table->integer('fk_id_rol')->nullable();
            $table->tinyInteger('estado')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->string('fecha_modicacion', 45)->nullable();
            $table->integer('id_usuario_modificacion')->nullable();

            $table->index(["fk_id_usuario"], 'fk_usuario_usuario_rol_idx');

            $table->index(["fk_id_rol"], 'fk_rol_usuario_rol_idx');


            $table->foreign('fk_id_usuario', 'fk_usuario_usuario_rol_idx')
                ->references('id_usuario')->on('usuario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('fk_id_rol', 'fk_rol_usuario_rol_idx')
                ->references('id_rol')->on('rol')
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
