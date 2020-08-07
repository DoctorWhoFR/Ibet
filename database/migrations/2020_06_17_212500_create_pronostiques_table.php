<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePronostiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pronostiques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('date_debut');
            $table->string('date_fin')->nullable();
            $table->string('analyse');
            $table->string('pronostique');
            $table->string('equipe_defence');
            $table->string('equipe_attack');
            $table->string('cote_moyen');
            $table->string('conbines_id')->nullable();
            $table->string('status');
            $table->string('confiance');
            $table->string('final_equipedefence_score')->nullable();
            $table->string('final_equipeattack_score')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pronostiques');
    }
}
