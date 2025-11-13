<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@quickpick.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Student user
        User::create([
            'name' => 'John Student',
            'email' => 'student@quickpick.com',
            'password' => bcrypt('password'),
            'role' => 'student',
        ]);

        // Staff user
        User::create([
            'name' => 'Jane Staff',
            'email' => 'staff@quickpick.com',
            'password' => bcrypt('password'),
            'role' => 'staff',
        ]);
    }
}