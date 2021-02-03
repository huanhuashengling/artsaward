<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'competitions';

    /**
     * Run the migrations.
     * @table competitions
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('competition_title');
            $table->string('competition_theme');
            $table->dateTime('apply_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->dateTime('active_start_date')->nullable();
            $table->dateTime('active_end_date')->nullable();
            $table->string('active_year', 45)->nullable();
            $table->string('notice_file_url', 45)->nullable();
            $table->integer('subjects_id');
            $table->boolean('is_active')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
