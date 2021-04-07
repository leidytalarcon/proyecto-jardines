<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'curso';

    /**
     * Run the migrations.
     * @table curso
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_curso');
            $table->integer('num_estudiantes')->nullable();
            $table->integer('fk_id_docente');
            $table->integer('fk_id_institucion')->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('descripcion')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuario_modicacion')->nullable();

            $table->index(["fk_id_docente"], 'fk_curso_docente_idx');

            $table->index(["fk_id_institucion"], 'fk_institucion_curso_idx');


            $table->foreign('fk_id_docente', 'fk_curso_docente_idx')
                ->references('id_docente')->on('docente')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('fk_id_institucion', 'fk_institucion_curso_idx')
                ->references('id_institucion')->on('institucion')
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
