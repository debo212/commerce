<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Création d'un admin
        User::create([
            'name' => 'Babana',
            'email' => 'admin@gmail.com',
            'address'=> 'Tokoin-Séminaire',
            'phone' => '90909090',
            'password' => Hash::make('admin2024'),
            'role' => 'admin',
        ]);

        // Création d'un gestionnaire
        User::create([
            'name' => 'Assuka',
            'email' => 'gestionnaire@gmail.com',
            'address' => 'Avepozo',
            'phone' => '91919191',
            'password' => Hash::make('gestion2024'),
            'role' => 'gestionnaire',
        ]);
    }
}
