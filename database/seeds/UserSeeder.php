<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        User::create([
          'name' => "Emmanuel Serna",
          'email' => "eserna27@gmail.com",
          'password' => bcrypt('secret'),
          'profession_id' => $professionId
        ]);
    }
}
