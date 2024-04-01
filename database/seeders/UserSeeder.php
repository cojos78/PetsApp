<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //add a record with Eloquent ORM
        $user = new User;
        $user->document = 75000001;
        $user->fullname = "Jeremias Springfield";
        $user->photo = "jeremias.png";
        $user->phone = 3100000001;
        $user->email = "jeremias@gmail.com";
        $user->password = bcrypt('admin');
        $user->role = "admin"; 
        $user->save();


        // add a record with array

        DB::table('users')->insert([
            'document' => 75000002,
            'fullname' => 'John Wick',
            'photo'=> 'JohnWick.png',
            'phone' => '3010000002',
            'email'=> 'johnw@gmail.com',
            'password'=> bcrypt('12345'),
        ]);
    }
}