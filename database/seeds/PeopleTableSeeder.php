<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'name' => 'taro',
            'mail' => 'taro@hogehoge.com',
            'age'  => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sato',
            'mail' => 'sato@hogehoge.com',
            'age'  => 80,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'yamamoto',
            'mail' => 'yamamoto@hogehoge.com',
            'age'  => 60,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'suzuki',
            'mail' => 'suzuki@hogehoge.com',
            'age'  => 56,
        ];
        DB::table('people')->insert($param);

    }
}
