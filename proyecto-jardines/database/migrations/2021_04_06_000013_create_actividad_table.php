<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'actividad';

    /**
     * Run the migrations.
     * @table actividad
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_actividad');
            $table->string('nombre', 45)->nullable();
            $table->date('fecha_cierre')->nullable();
            $table->integer('fk_id_curso');
            $table->dateTime('fecha_creacion')->nullable();
            $table->integer('id_usuario_cracion')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
            $table->integer('id_usuarion_modificacion')->nullable();

            $table->index(["fk_id_curso"], 'fk_tema_curso1_idx');


            $table->foreign('fk_id_curso', 'fk_tema_curso1_idx')
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
