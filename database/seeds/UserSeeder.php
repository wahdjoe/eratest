<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@test.com',
                'password' => '$2y$10$g3QpKK6I7E9fRdVX5Tj7rOkAU6pWQXemBITyl7V56SHfJGPex4aJK',
                'role_id' => 1,
                'manager_id' => null
            ],
            [
                'id' => 2,
                'name' => 'manager1',
                'email' => 'manager1@test.com',
                'password' => '$2y$10$g3QpKK6I7E9fRdVX5Tj7rOkAU6pWQXemBITyl7V56SHfJGPex4aJK',
                'role_id' => 2,
                'manager_id' => null
            ],
            [
                
                'id' => 3,
                'name' => 'manager2',
                'email' => 'manager2@test.com',
                'password' => '$2y$10$g3QpKK6I7E9fRdVX5Tj7rOkAU6pWQXemBITyl7V56SHfJGPex4aJK',
                'role_id' => 2,
                'manager_id' => null
            ],
            [
                
                'id' => 4,
                'name' => 'staff1',
                'email' => 'staff1@test.com',
                'password' => '$2y$10$g3QpKK6I7E9fRdVX5Tj7rOkAU6pWQXemBITyl7V56SHfJGPex4aJK',
                'role_id' => 3,
                'manager_id' => 2
            ],       
            [
                
                'id' => 5,
                'name' => 'staff2',
                'email' => 'staff2@test.com',
                'password' => '$2y$10$g3QpKK6I7E9fRdVX5Tj7rOkAU6pWQXemBITyl7V56SHfJGPex4aJK',
                'role_id' => 3,
                'manager_id' => 2
            ],
            [
                
                'id' => 6,
                'name' => 'staff3',
                'email' => 'staff3@test.com',
                'password' => '$2y$10$g3QpKK6I7E9fRdVX5Tj7rOkAU6pWQXemBITyl7V56SHfJGPex4aJK',
                'role_id' => 3,
                'manager_id' => 3
            ],       
            [
                
                'id' => 7,
                'name' => 'staff4',
                'email' => 'staff4@test.com',
                'password' => '$2y$10$g3QpKK6I7E9fRdVX5Tj7rOkAU6pWQXemBITyl7V56SHfJGPex4aJK',
                'role_id' => 3,
                'manager_id' => 3
            ]
        ]);
    }
}
