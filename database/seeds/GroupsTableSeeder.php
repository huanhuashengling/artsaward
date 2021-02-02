<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->delete();

        DB::table('groups')->insert([
            ['id' => 1, 'subjects_id' => 1, 'group_name' => '小低', 'group_desc' => "小学低年级", 'group_code' => 1],
            ['id' => 2, 'subjects_id' => 1, 'group_name' => '小高', 'group_desc' => "小学高年级", 'group_code' => 2],
            ['id' => 3, 'subjects_id' => 1, 'group_name' => '初中', 'group_desc' => "初中", 'group_code' => 3],
            ['id' => 4, 'subjects_id' => 1, 'group_name' => '高中', 'group_desc' => "高中", 'group_code' => 4],
        ]);
    }
}