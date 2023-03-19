<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'User',
            'email' => 'user@aqarmap.com',
            'email_verified_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'password' => Hash::make('123456789')
        ]);
    }
}
