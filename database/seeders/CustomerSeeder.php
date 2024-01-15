<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $customer = [
        [
            'image' =>'tunas.png',
            'name' =>'name2',
       ],
       [
            'image' =>'trisula.png',
            'name' =>'name3',
       ],
        [
            'image' =>'tunas.png',
            'name' =>'name4',
       ],
       [
            'image' =>'trisula.png',
            'name' =>'name5',
       ],
        [
            'image' =>'tunas.png',
            'name' =>'name6',
       ],
       [
            'image' =>'trisula.png',
            'name' =>'name7',
       ],

        ];

        DB::table('customers')->insert($customer);
    }
}
 