<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'name' => 'Admin Laundry',
            'role' => Role::Admin->value,
        ]);

        $user->save();
    }
}
