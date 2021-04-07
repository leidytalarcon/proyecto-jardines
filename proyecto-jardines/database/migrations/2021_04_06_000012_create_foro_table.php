<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'foro';

    /**
     * Run the migrations.
     * @table foro
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_foro');
            $table->integer('fk_id_curso')->nullable();
            $table->date('fecha_cierre')->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('descripcion')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuario_modificacion')->nullable();

            $table->index(["fk_id_curso"], 'fk_curso_foro_idx');


            $table->foreign('fk_id_curso', 'fk_curso_foro_idx')
                ->references('id_curso')->on('curso')
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
