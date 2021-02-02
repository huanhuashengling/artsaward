<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(DistrictsTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        $this->call(AwardLevelsTableSeeder::class);
        $this->call(ApplyStatesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
    }
}
