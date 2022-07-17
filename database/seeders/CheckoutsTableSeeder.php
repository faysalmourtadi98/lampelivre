<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CheckoutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('checkouts')->delete();
        
        \DB::table('checkouts')->insert(array (
            0 => 
            array (
                'checkout_adress' => 'Cumque dolore at qui',
                'checkout_city' => 'Lorem rerum expedita',
                'checkout_credit_cart_number' => '999',
                'checkout_cvv' => 'Deserunt dolor recus',
                'checkout_email' => 'nuhebyh@mailinator.com',
                'checkout_exp_month' => '12',
                'checkout_exp_year' => '1994',
                'checkout_full_name' => 'Ori Mosley',
                'checkout_name_on_card' => 'Judith Ware',
                'checkout_state' => 'Aute Nam eos non si',
                'checkout_valide' => 'OUI',
                'checkout_zip' => '36773',
                'created_at' => '2021-06-14 20:38:12.000000',
                'id' => 1,
                'panier_id' => 37,
                'updated_at' => '2021-06-14 20:53:00.000000',
            ),
            1 => 
            array (
                'checkout_adress' => 'Qui et sint dolor er',
                'checkout_city' => 'Animi eu et sit re',
                'checkout_credit_cart_number' => '398',
                'checkout_cvv' => 'Placeat irure recus',
                'checkout_email' => 'cowuvap@mailinator.com',
                'checkout_exp_month' => '3',
                'checkout_exp_year' => '1988',
                'checkout_full_name' => 'Edward Ortega',
                'checkout_name_on_card' => 'Xandra Lindsay',
                'checkout_state' => 'Eum exercitationem q',
                'checkout_valide' => 'NON',
                'checkout_zip' => '40306',
                'created_at' => '2021-06-14 21:09:08.000000',
                'id' => 2,
                'panier_id' => 37,
                'updated_at' => '2021-06-14 21:09:08.000000',
            ),
        ));
        
        
    }
}