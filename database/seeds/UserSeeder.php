<?php

use App\Users\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Jason Kinney',
        	'email' => 'jekinneys@yahoo.com',
        	'password' => bcrypt('aubreys1'),
        	'activated' => 1,
        	'admin' => 1,
        ]);
    }
}
