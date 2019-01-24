<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cb_admins')->insert([
            'name' => "admin",
            'email' =>'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

         DB::table('messages')->insert([
        [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ],  [
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mobile' => '+880'.random_int(10000, 99999),
            'message' => str_random(10).'lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet lorem ipsum dollar sit amet ',
        ]

    ]);

    }
}
