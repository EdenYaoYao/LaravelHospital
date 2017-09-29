<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \App\Admin::create([
            'name' => 'chen',
            'email' => '2983022187@qq.com',
            'password' => Hash::make('888888'),
            'image' => $faker->imageUrl(100, 100),
            'is_super' => 1
        ]);

        \App\Admin::create([
            'name' => 'huang',
            'email' => '123456789@qq.com',
            'password' => Hash::make('123456'),
            'image' => $faker->imageUrl(100, 100),
            'is_super' => 1
        ]);

//        foreach (range(1, 10) as $index) {
//            \App\Admin::create([
//                'name' => 'admin' . $index,
//                'email' => 'admin' . $index . '@qq.com',
//                'password' => Hash::make('123456'),
//                'image' => $faker->imageUrl(100, 100),
//                'is_super' => 0
//            ]);
//        }
    }
}
