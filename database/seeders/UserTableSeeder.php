<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create(
            array(
                'name' => 'Admin',
                'password' => bcrypt('password'),
                'email' => 'admin@gmail.com',
            )
        );
    }
}
