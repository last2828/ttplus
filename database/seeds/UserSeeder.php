<?php

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
        User::truncate();

        User::create([
          'name' => 'admin',
          'email' => 'admin@admin.com',
          'password' => Hash::make('password'),
        ]);
    }
}
