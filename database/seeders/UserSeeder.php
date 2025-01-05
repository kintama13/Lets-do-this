<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = User::create([
            'name' => 'Muhammad Bilal',
            'email' => '11201059@student.itk.ac.id',
            'password' => Hash::make('B4likpapan')
        ]);

        $owner->assignRole('owner');
    }
}
