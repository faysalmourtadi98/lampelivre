<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaniersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paniers')->delete();
        
        \DB::table('paniers')->insert(array (
            0 => 
            array (
                'created_at' => '2021-06-13 16:29:52.000000',
                'id' => 37,
                'nb_products' => 2,
                'product_id' => 4,
                'product_prix_total' => 80.0,
                'updated_at' => '2021-06-13 16:29:52.000000',
                'user_id' => 37,
            ),
            1 => 
            array (
                'created_at' => '2021-06-14 18:38:04.000000',
                'id' => 39,
                'nb_products' => 4,
                'product_id' => 4,
                'product_prix_total' => 160.0,
                'updated_at' => '2021-06-14 20:13:29.000000',
                'user_id' => 38,
            ),
        ));
        
        
    }
}