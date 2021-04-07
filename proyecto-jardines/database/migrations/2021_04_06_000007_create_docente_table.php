<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'docente';

    /**
     * Run the migrations.
     * @table docente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_docente');
            $table->string('nombre', 45)->nullable();
            $table->string('apellidos', 100)->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('fk_id_usuario')->nullable();
            $table->string('direccion')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuario_modificacion')->nullable();

            $table->index(["fk_id_usuario"], 'fk_usuario_docente_idx');


            $table->foreign('fk_id_usuario', 'fk_usuario_docente_idx')
                ->references('id_usuario')->on('usuario')
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
