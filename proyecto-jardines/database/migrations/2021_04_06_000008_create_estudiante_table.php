<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'estudiante';

    /**
     * Run the migrations.
     * @table estudiante
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_estudiante');
            $table->integer('fk_id_usuario')->nullable();
            $table->string('nombres_estudiante')->nullable();
            $table->string('apellidos_estudiante')->nullable();
            $table->string('nombres_acudiente')->nullable();
            $table->string('apellidos_acudiente')->nullable();
            $table->string('telefono', 45)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('fk_id_institucion')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuario_modificacion')->nullable();

            $table->index(["fk_id_institucion"], 'fk_institucion_estudiante_idx');


            $table->foreign('fk_id_institucion', 'fk_institucion_estudiante_idx')
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
