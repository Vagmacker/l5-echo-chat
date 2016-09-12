<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\User::class, 10)->create();

        factory(\App\Model\User::class)->create([
            'name' => 'João Vagmacker',
            'email' => 'vagmackerdsm@gmail.com'
        ]);

        factory(\App\Model\User::class)->create([
            'name' => 'João Felipe',
            'email' => 'joaofelipe25@hotmail.com'
        ]);
    }
}
