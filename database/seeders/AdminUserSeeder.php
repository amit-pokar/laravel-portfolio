<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Seed the super admin user.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'pokaramit2005@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => 'Amitp@123',
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );
    }
}
