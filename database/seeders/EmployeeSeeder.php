<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'employee_id' => 01,
                'name' => 'John Doe',
                'start_date' => '2022-01-01',
                'description' => 'test1',
                'picture' => 'john-doe.jpg',
            ],
        ]);
    }
}
