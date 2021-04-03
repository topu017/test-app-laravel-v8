<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('departments')->insert([
            'user_id' => 1,
            'department_name' => 'DepA',
            'department_position' => 'PosA',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        \DB::table('departments')->insert([
            'user_id' => 1,
            'department_name' => 'DepB',
            'department_position' => 'PosA',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        \DB::table('departments')->insert([
            'user_id' => 2,
            'department_name' => 'DepA',
            'department_position' => 'PosB',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        \DB::table('departments')->insert([
            'user_id' => 2,
            'department_name' => 'DepB',
            'department_position' => 'PosB',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        \DB::table('departments')->insert([
            'user_id' => 3,
            'department_name' => 'DepA',
            'department_position' => 'PosC',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
