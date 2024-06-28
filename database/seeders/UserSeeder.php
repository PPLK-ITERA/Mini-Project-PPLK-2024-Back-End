<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
      User::create(
         [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
         ],

      );
      User::create(
         [
            'name' => 'Test User2',
            'email' => 'test2@example.com',
            'password' => bcrypt('password'),
         ],

      );
   }
}