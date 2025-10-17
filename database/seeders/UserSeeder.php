<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'john_doe',
            'password' => 'password123', // Password akan dienkripsi otomatis karena mutator setPasswordAttribute
            'firstname' => 'John',
            'lastname' => 'Doe',
            'role' => 1,
            'isactive' => 1,
            'createddate' => now(),
            'createdby' => 'admin',
            'updateddate' => now(),
            'updatedby' => 'admin',
            'isdeleted' => 1,
        ]);
    }
}
