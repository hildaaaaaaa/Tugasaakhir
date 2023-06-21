<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'superadmin1',
                'email' => 'superadmin1@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'superadmin'
            ],
            [
                'name' => 'superadmin2',
                'email' => 'superadmin2@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'superadmin'
            ],
            [
                'name' => 'superadmin3',
                'email' => 'superadmin3@gmail.com',
                'password' => bcrypt('12345'),
                'role' => 'superadmin'
            ]
        ]);
    }
}
