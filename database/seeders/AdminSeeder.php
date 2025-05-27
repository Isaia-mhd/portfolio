<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::where('email', config('services.brevo.sender'))->exists()) {
            User::create([
                'username'  => env('ADMIN_USERNAME'),
                'fullName'  => env('ADMIN_FULLNAME'),
                'email'     => env('ADMIN_MAIL'),
                'password'  => Hash::make(env('ADMIN_PASSWORD')),
            ]);
        }
    }
}
