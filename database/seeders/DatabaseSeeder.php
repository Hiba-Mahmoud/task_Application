<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Faker\Factory;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Factory::create();
        User::create([
            'name'=>'Admin',
            'mobile' => '01012345670',
            'email'=>'admin@admin.com',
            'password'=>'123456789',
            'longitude'=>'10.8',
            'latitude'=>'10.4',
            'image'=>$faker->imageUrl(640,480,'cats',true,null,'Facker'),
        ]);

        //add more users
        for($i = 0; $i < 20; $i++){
            User::create([
                'name'=>$faker->name,
                'image'=>$faker->imageUrl(640,480,'cats',true,null,'Facker'),
                'mobile' =>'0102121222'.$i,

                'password'=>'123456789',
                'longitude'=>'10.8',
                'latitude'=>'10.4',
                'password'=>'123456789',
                'email'=> $faker->email,
            ]);
        };
    }
}
