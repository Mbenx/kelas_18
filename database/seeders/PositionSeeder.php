<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'manager', 'code' => 'm'],
            ['name' => 'staff', 'code' => 's'],
            ['name' => 'general manager', 'code' => 'gm'],
        ];

        foreach ($data as $d){
            DB::table('positions')->insert([
                'name' => $d['name'],
                'code' => $d['code'],
            ]);
        }
    }
}
