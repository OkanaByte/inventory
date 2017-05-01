<?php

use Illuminate\Database\Seeder;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descriptions')->truncate();
        $description =[
            ['name' => 'CPU'],
            ['name' => 'Lapto'],
            ['name' => 'Monitor'],
            ['name' => 'System Unit'],
        ];

        DB::table('descriptions')->insert($description);
    }
}
