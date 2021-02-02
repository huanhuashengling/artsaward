<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        DB::table('projects')->insert([
            ['id' => 1, 'project_name' => '绘画', 'project_name_desc' => "绘画", 'project_code' => 1, 'subjects_id' => 1],
            ['id' => 2, 'project_name' => '软笔', 'project_name_desc' => "软笔", 'project_code' => 2, 'subjects_id' => 1],
            ['id' => 3, 'project_name' => '硬笔', 'project_name_desc' => "硬笔", 'project_code' => 3, 'subjects_id' => 1],
            ['id' => 4, 'project_name' => '摄影', 'project_name_desc' => "摄影", 'project_code' => 4, 'subjects_id' => 1],
        ]);
    }
}