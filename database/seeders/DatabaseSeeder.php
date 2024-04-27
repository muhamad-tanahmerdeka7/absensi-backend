<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

        User::factory()->create([
            'name' => 'Muhamad S.Kom Admin',
            'email' => 'muhamad@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\Company::create([
            'name' => 'PT. Jalan Aja Dulu',
            'email' => 'muhamad@gmail.com',
            'address' => 'Jl. Jalan Aja Dulu, Jakarta Timur',
            'latitude' => '-6.200000',
            'longitude' => '106.816666',
            'radius_km' => '5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        // kalau ada factory di model
         $this->call([
            AttendanceSeeder::class,
            // PermissionSeeder::class,
        ]);
    }
}
