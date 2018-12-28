<?php

use Illuminate\Database\Seeder;
use App\Staff;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Staff::create([
			'name' => 'kyaw kyaw',
			'email' => 'kyaw@gmail.com',
			'password' => bcrypt('kyaw'),
		]);

    }
}
