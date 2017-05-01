<?php

use Illuminate\Database\Seeder;

class ManufactureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufactures')->truncate();

        $manufacture = [
            ['name' => 'HP'],
            ['name' => 'DELL'],
            ['name' => 'ACER'],
            ['name' => 'AVAYA'],
            ['name' => 'JABRA'],
            ['name' => 'WYSE'],
            ['name' => 'A4TECH'],
            ['name' => 'OTHERS'],
        ];

        DB::table('manufactures')->insert($manufacture);
    }
}
