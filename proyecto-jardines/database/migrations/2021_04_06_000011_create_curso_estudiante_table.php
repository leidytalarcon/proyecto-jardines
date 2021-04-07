<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoEstudianteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'curso_estudiante';

    /**
     * Run the migrations.
     * @table curso_estudiante
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_curso_estudiante');
            $table->tinyInteger('aprob')->nullable();
            $table->integer('fk_id_curso');
            $table->integer('fk_id_estudiante');
            $table->tinyInteger('estado')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuario_modificacion')->nullable();

            $table->index(["fk_id_curso"], 'fk_prom_curso1_idx');

            $table->index(["fk_id_estudiante"], 'fk_prom_estudiante1_idx');


            $table->foreign('fk_id_curso', 'fk_prom_curso1_idx')
                ->references('id_curso')->on('curso')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('fk_id_estudiante', 'fk_prom_estudiante1_idx')
                ->references('id_estudiante')->on('estudiante')
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
