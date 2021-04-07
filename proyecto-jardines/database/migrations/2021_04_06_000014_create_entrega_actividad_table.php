<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregaActividadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'entrega_actividad';

    /**
     * Run the migrations.
     * @table entrega_actividad
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_entrega_actividad');
            $table->integer('fk_id_actividad')->nullable();
            $table->integer('fk_id_estudiante')->nullable();
            $table->string('url_archivo')->nullable();
            $table->string('observacion')->nullable();
            $table->float('calificacion')->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuario_modificacion')->nullable();

            $table->index(["fk_id_estudiante"], 'fk_estudiante_entrega_actividad_idx');

            $table->index(["fk_id_actividad"], 'fk_actividad_estrega_Actividad_idx');


            $table->foreign('fk_id_estudiante', 'fk_estudiante_entrega_actividad_idx')
                ->references('id_estudiante')->on('estudiante')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('fk_id_actividad', 'fk_actividad_estrega_Actividad_idx')
                ->references('id_actividad')->on('actividad')
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
