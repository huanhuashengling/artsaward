<?php

use Illuminate\Database\Seeder;

class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->delete();

        DB::table('instructors')->insert([
            ['id' => 1, 'teacher_name' => '尤文杰', 'gender' => 1, 'subjects_id' => 1, 'birth_date' => "19841026", 'title' => '二级教师', 'username' => "18073100720", 'password' => bcrypt("123456"), 'schools_id' => 1,  'is_school_subject_leader' => 1, 'remember_token' => ""],
        ]);
    }
}
