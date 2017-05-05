<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();
      $this->call('UserTableSeeder');
      $this->command->info('User Table Seeded!');
    }
}
          class UserTableSeeder extends Seeder {
      public function run()
      {
      DB::table('typeproduct')->delete();
      DB::table('typeproduct')->insert([
      'name' => 'คอนกรีทผสม',
      'created_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('typeproduct')->insert([
      'name' => 'คอนกรีทแผ่น',
      'created_at' => date('Y-m-d H:i:s')
      ]);

      DB::table('product')->delete();
      DB::table('product')->insert([
      'name' => 'คอนกรีทผสม',
      'price' => '100',
      'type' => '1',
      'created_at' => date('Y-m-d H:i:s')
      ]);
      }
}
