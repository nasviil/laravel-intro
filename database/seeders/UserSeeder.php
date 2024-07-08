<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach (range(1, 15) as $var) {
            $user = new User;
            $user->name = 'Haroun';
            $user->email = mt_rand() . '@gmail.com';
            $user->password = bcrypt('password');
            $user->save();
        }
    }
}
