<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'username' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@lindungin.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('verifikator');

        $user = User::create([
            'username' => 'jesselyne',
            'name' => 'Jess',
            'email' => 'jessa@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

            $user->assignRole('user');
        }
}
