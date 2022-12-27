<?php
 
namespace App\Database\Seeds;
 
use CodeIgniter\Database\Seeder;
use \Faker\Factory;
 
class UserSeed extends Seeder
{
    public function run()
    {
		for($i = 0; $i < 5500; $i++){
			$this->db->table("users")->insert($this->generateUsers());
		}
    }
 
    public function generateUsers()
    {
        $faker = Factory::create();
 
		return [
			"name" => $faker->name,
			"email" => $faker->email,
			"city" =>  $faker->city
		];
    }
}