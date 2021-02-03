<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'awards';

    /**
     * Run the migrations.
     * @table awards
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('instructors_id');
            $table->integer('competitions_id');
            $table->integer('students_id');
            $table->integer('schools_id');
            $table->integer('projects_id');
            $table->integer('groups_id');
            $table->integer('city_award_levels_id')->nullable();
            $table->integer('district_award_levels_id')->nullable();
            $table->integer('apply_states_id');
            $table->string('work_code', 45)->nullable();
            $table->integer('subjects_id')->nullable();
            $table->string('file_url', 45)->nullable();
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
