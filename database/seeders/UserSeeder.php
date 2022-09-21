<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $user = User::create([
            'name' => 'Johsn',
            'email' => 'test@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $user->assignRole('Admin');

        User::factory(99)->create();

    }
}
