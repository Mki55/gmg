<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'employee_code' => '001',
                'department' => 'IT',
                'position' => 'Developer',
                'other_field' => 'test',
            ],
        ]);
    }
}
