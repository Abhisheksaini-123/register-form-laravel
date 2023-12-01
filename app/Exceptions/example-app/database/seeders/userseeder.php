<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use App\Models\User;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([

    'name'=>"Abhisheksaini",
    'email'=> "Abhisheksaini@gmail.com",
    'password'=> "987654321"
    
]);
          
    }
}
