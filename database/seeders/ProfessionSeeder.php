<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1=User::create([
            'firstname' => 'Luis',
            'lastname' => 'Yuburi',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),

        ]);
    }
}
