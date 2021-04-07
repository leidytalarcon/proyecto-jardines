<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadArchivoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'actividad_archivo';

    /**
     * Run the migrations.
     * @table actividad_archivo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_actividad_archivo');
            $table->integer('fk_id_actividad')->nullable();
            $table->string('url_archivo')->nullable();
            $table->string('formato', 45)->nullable();
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_creacion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_fecha_modificacion')->nullable();

            $table->index(["fk_id_actividad"], 'fk_actividad_actividad_archivo_idx');


            $table->foreign('fk_id_actividad', 'fk_actividad_actividad_archivo_idx')
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
