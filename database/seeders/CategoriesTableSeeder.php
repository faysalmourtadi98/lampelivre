<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'categorie_description' => 'vide',
                'categorie_name' => 'Economie',
                'created_at' => '2021-05-31 02:04:14.000000',
                'id' => 1,
                'updated_at' => '2021-05-31 13:48:07.000000',
            ),
            1 => 
            array (
                'categorie_description' => 'vide',
                'categorie_name' => 'Math/Physique',
                'created_at' => '2021-05-31 02:04:32.000000',
                'id' => 2,
                'updated_at' => '2021-05-31 02:04:32.000000',
            ),
            2 => 
            array (
                'categorie_description' => 'vide',
                'categorie_name' => 'Informatique',
                'created_at' => '2021-05-31 02:04:45.000000',
                'id' => 3,
                'updated_at' => '2021-05-31 02:04:45.000000',
            ),
            3 => 
            array (
                'categorie_description' => 'vide',
                'categorie_name' => 'Littérature',
                'created_at' => '2021-05-31 02:05:20.000000',
                'id' => 4,
                'updated_at' => '2021-05-31 02:05:20.000000',
            ),
        ));
        
        
    }
}