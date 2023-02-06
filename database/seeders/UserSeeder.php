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
        User::create([
            'name' => 'Viktor Despotovoski',
            'email' => 'viktor@exVoxteneo.mk',
            'password' => bcrypt('temp12345'),
            'role_id' => rand(1,3),
            'country_id' => rand(1,233)
        ]);

        User::create([
            'name' => 'Local Administrator',
            'email' => 'admin@laravel.mk',
            'password' => bcrypt('temp12345'),
            'role_id' => 1,
            'country_id' => rand(1,223)
        ]);
    }
}
