<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->delete();

        DB::table('schools')->insert([
            ['districts_id' => 1, 'school_name' => '修业小学', 'school_full_name' => '长沙市芙蓉区修业小学', 'school_level' => 1, 'school_code' => "01"],
            ['districts_id' => 1, 'school_name' => '东茅街小学', 'school_full_name' => '长沙市芙蓉区东茅街小学', 'school_level' => 1, 'school_code' => "02"],
            ['districts_id' => 1, 'school_name' => '浏正街小学', 'school_full_name' => '长沙市芙蓉区浏正街小学', 'school_level' => 1, 'school_code' => "03"],
            ['districts_id' => 1, 'school_name' => '楚怡小学', 'school_full_name' => '长沙市芙蓉区楚怡小学', 'school_level' => 1, 'school_code' => "04"],
            ['districts_id' => 1, 'school_name' => '八一路小学', 'school_full_name' => '长沙市芙蓉区八一路小学', 'school_level' => 1, 'school_code' => "05"],
            ['districts_id' => 1, 'school_name' => '五一中路', 'school_full_name' => '长沙市芙蓉区五一中路', 'school_level' => 1, 'school_code' => "06"],
            ['districts_id' => 1, 'school_name' => '育才学校', 'school_full_name' => '长沙市芙蓉区育才学校', 'school_level' => 1, 'school_code' => "07"],
            ['districts_id' => 1, 'school_name' => '育华小学', 'school_full_name' => '长沙市芙蓉区育华小学', 'school_level' => 1, 'school_code' => "08"],
            ['districts_id' => 1, 'school_name' => '大同小学', 'school_full_name' => '长沙市芙蓉区大同小学', 'school_level' => 1, 'school_code' => "09"],
            ['districts_id' => 1, 'school_name' => '燕山小学', 'school_full_name' => '长沙市芙蓉区燕山小学', 'school_level' => 1, 'school_code' => "10"],
            ['districts_id' => 1, 'school_name' => '育英小学', 'school_full_name' => '长沙市芙蓉区育英小学', 'school_level' => 1, 'school_code' => "11"],
            ['districts_id' => 1, 'school_name' => '曙光路小学', 'school_full_name' => '长沙市芙蓉区曙光路小学', 'school_level' => 1, 'school_code' => "12"],
            ['districts_id' => 1, 'school_name' => '朝阳小学', 'school_full_name' => '长沙市芙蓉区朝阳小学', 'school_level' => 1, 'school_code' => "13"],
            ['districts_id' => 1, 'school_name' => '东晖小学', 'school_full_name' => '长沙市芙蓉区东晖小学', 'school_level' => 1, 'school_code' => "14"],
            ['districts_id' => 1, 'school_name' => '蓉园小学', 'school_full_name' => '长沙市芙蓉区蓉园小学', 'school_level' => 1, 'school_code' => "15"],
            ['districts_id' => 1, 'school_name' => '火星小学', 'school_full_name' => '长沙市芙蓉区火星小学', 'school_level' => 1, 'school_code' => "16"],
            ['districts_id' => 1, 'school_name' => '育才双新小学', 'school_full_name' => '长沙市芙蓉区育才双新小学', 'school_level' => 1, 'school_code' => "17"],
            ['districts_id' => 1, 'school_name' => '燕山二小', 'school_full_name' => '长沙市芙蓉区燕山二小', 'school_level' => 1, 'school_code' => "18"],
            ['districts_id' => 1, 'school_name' => '育英第二小学', 'school_full_name' => '长沙市芙蓉区育英第二小学', 'school_level' => 1, 'school_code' => "19"],
            ['districts_id' => 1, 'school_name' => '东郡小学', 'school_full_name' => '长沙市芙蓉区东郡小学', 'school_level' => 1, 'school_code' => "20"],
            ['districts_id' => 1, 'school_name' => '育才二小', 'school_full_name' => '长沙市芙蓉区育才二小', 'school_level' => 1, 'school_code' => "21"],
            ['districts_id' => 1, 'school_name' => '育英西垅小学', 'school_full_name' => '长沙市芙蓉区育英西垅小学', 'school_level' => 1, 'school_code' => "22"],
            ['districts_id' => 1, 'school_name' => '育才东屯小学', 'school_full_name' => '长沙市芙蓉区育才东屯小学', 'school_level' => 1, 'school_code' => "23"],
            ['districts_id' => 1, 'school_name' => '东风小学', 'school_full_name' => '长沙市芙蓉区东风小学', 'school_level' => 1, 'school_code' => "24"],
            ['districts_id' => 1, 'school_name' => '杉木小学', 'school_full_name' => '长沙市芙蓉区杉木小学', 'school_level' => 1, 'school_code' => "25"],
            ['districts_id' => 1, 'school_name' => '大同第三小学', 'school_full_name' => '长沙市芙蓉区大同第三小学', 'school_level' => 1, 'school_code' => "26"],
            ['districts_id' => 1, 'school_name' => '马坡岭小学', 'school_full_name' => '长沙市芙蓉区马坡岭小学', 'school_level' => 1, 'school_code' => "27"],
            ['districts_id' => 1, 'school_name' => '大同二小', 'school_full_name' => '长沙市芙蓉区大同二小', 'school_level' => 1, 'school_code' => "28"],
            ['districts_id' => 1, 'school_name' => '火星二小', 'school_full_name' => '长沙市芙蓉区火星二小', 'school_level' => 1, 'school_code' => "29"],
            ['districts_id' => 1, 'school_name' => '马王堆小学', 'school_full_name' => '长沙市芙蓉区马王堆小学', 'school_level' => 1, 'school_code' => "30"],
            ['districts_id' => 1, 'school_name' => '大同古汉城', 'school_full_name' => '长沙市芙蓉区大同古汉城', 'school_level' => 1, 'school_code' => "31"],
            ['districts_id' => 1, 'school_name' => '育才三小', 'school_full_name' => '长沙市芙蓉区育才三小', 'school_level' => 1, 'school_code' => "32"],
            ['districts_id' => 1, 'school_name' => '大同瑞致小学', 'school_full_name' => '长沙市芙蓉区大同瑞致小学', 'school_level' => 1, 'school_code' => "33"],
            ['districts_id' => 1, 'school_name' => '芙蓉实验小学', 'school_full_name' => '长沙市芙蓉区实验小学', 'school_level' => 1, 'school_code' => "34"],
            ['districts_id' => 1, 'school_name' => '东郡二小', 'school_full_name' => '长沙市芙蓉区东郡二小', 'school_level' => 1, 'school_code' => "35"],
            ['districts_id' => 1, 'school_name' => '农科子小', 'school_full_name' => '长沙市芙蓉区农科子小', 'school_level' => 1, 'school_code' => "36"],
            ['districts_id' => 1, 'school_name' => '农大子小', 'school_full_name' => '长沙市芙蓉区农大子小', 'school_level' => 1, 'school_code' => "37"],
            ['districts_id' => 1, 'school_name' => '区少年宫', 'school_full_name' => '长沙市芙蓉区区少年宫', 'school_level' => 1, 'school_code' => "38"],
            ['districts_id' => 1, 'school_name' => '区少年宫2', 'school_full_name' => '长沙市芙蓉区区少年宫2', 'school_level' => 1, 'school_code' => "39"],
            ['districts_id' => 1, 'school_name' => '湘一芙蓉中学', 'school_full_name' => '长沙市芙蓉区湘一芙蓉中学', 'school_level' => 2, 'school_code' => "40"],
            ['districts_id' => 1, 'school_name' => '一中双语实验', 'school_full_name' => '长沙市芙蓉区一中双语实验', 'school_level' => 2, 'school_code' => "41"],
            ['districts_id' => 1, 'school_name' => '长郡芙蓉实验', 'school_full_name' => '长沙市芙蓉区长郡芙蓉实验', 'school_level' => 2, 'school_code' => "42"],
            ['districts_id' => 1, 'school_name' => '长郡芙蓉中学', 'school_full_name' => '长沙市芙蓉区长郡芙蓉中学', 'school_level' => 2, 'school_code' => "43"],
            ['districts_id' => 1, 'school_name' => '湘一芙蓉二中', 'school_full_name' => '长沙市芙蓉区湘一芙蓉二中', 'school_level' => 2, 'school_code' => "44"],
        ]);
    }
}