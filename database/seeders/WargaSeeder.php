<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'warga',
            'email' => 'warga@gmail.com',
            'password' => Hash::make('1'),
            'level_user' => 'warga'
        ]);
    }
}
