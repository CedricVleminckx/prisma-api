<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'noreply@prisma.care',
            'password' => Hash::make("prisma"),
            'first_name' => 'Prisma',
            'last_name' => 'System',
        ]);
    }
}
