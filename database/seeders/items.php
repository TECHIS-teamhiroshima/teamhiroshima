<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'user_id' => '1',
            'name' => 'taro',
            'type' => '1',
            'detail' => 'aaaaaaa',
            'status' => '2',
        ]);

        DB::table('items')->insert([
            'user_id' => '1',
            'name' => 'jiro',
            'type' => '2',
            'detail' => 'bbbbbbbbb',
            'status' => '3',
        ]);
    }
}
