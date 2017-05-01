<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->truncate();

        $locations = [
            [
                'name' => 'Luisa 1st flr',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
            [
                'name' => 'Luisa 2nd flr',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
            [
                'name' => 'Luisa 3er flr',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
            [
                'name' => 'Filandia 1st flr',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
            [
                'name' => 'Filandia 2nd flr',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
            [
                'name' => 'Filandia 3er flr',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
            [
                'name' => 'Filandia 4to flr',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
            [
                'name' => 'Front Storage',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
            [
                'name' => 'Back Storage',
                'BU' => 'PH4M14',
                'OU' => 'P4'
            ],
        ];

        DB::table('locations')->insert($locations);
    }
}
