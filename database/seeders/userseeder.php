<?php

namespace Database\Seeders;
use App\Models\User;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name'=> "Abhishek saini",
            'email'=> "sainiabhishek123@gmail.com",
            'password'=> "12345678",
        ]);
          }
}
