<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@bumdes.id',
            'password' => bcrypt('adminpassword'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Customer',
            'email' => 'customer@bumdes.id',
            'password' => bcrypt('customerpassword'),
            'role' => 'customer'
        ]);
    }
}
