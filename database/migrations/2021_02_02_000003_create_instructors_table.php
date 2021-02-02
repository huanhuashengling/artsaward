<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructorsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'instructors';

    /**
     * Run the migrations.
     * @table instructors
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('teacher_name', 45);
            $table->integer('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('title')->nullable();
            $table->string('username', 13);
            $table->string('password');
            $table->integer('schools_id');
            $table->boolean('is_school_subject_leader')->nullable();
            $table->integer('subjects_id');
            $table->string('remember_token')->nullable();
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
