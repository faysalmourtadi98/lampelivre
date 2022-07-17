<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'categorie_id' => 1,
                'created_at' => '2021-05-30 16:18:16.000000',
                'id' => 1,
                'product_auteur' => 'vide',
                'product_description' => 'Une brève histoire du temps : Du big bang aux trous noirs est un ouvrage de vulgarisation scientifique qui traite de cosmologie, la science des lois qui gouvernent l’univers',
                'product_devise' => 'MAD',
                'product_image' => 'book2.jpg',
                'product_in_stock' => 'oui',
                'product_name' => 'A Brief History of Time',
                'product_prix' => '100',
                'updated_at' => '2021-05-30 16:18:16.000000',
            ),
            1 => 
            array (
                'categorie_id' => 1,
                'created_at' => '2021-05-30 16:20:44.000000',
                'id' => 2,
                'product_auteur' => 'vide',
                'product_description' => 'citizen  guide to economics-for those who want to understand how the economy works but have no interest in jargon or equations. Sowell reveals the general principles behind any kind of economy-capitalist, socialist, feudal',
                'product_devise' => 'MAD',
                'product_image' => 'book6.jpg',
                'product_in_stock' => 'vide',
                'product_name' => 'Basic Economics: A Commoon Sense Guide to the Economy',
                'product_prix' => '140',
                'updated_at' => '2021-05-30 16:22:53.000000',
            ),
            2 => 
            array (
                'categorie_id' => 3,
                'created_at' => '2021-05-27 12:08:24.000000',
                'id' => 3,
                'product_auteur' => 'vide',
                'product_description' => 'vide',
                'product_devise' => 'MAD',
                'product_image' => 'book4.jpg',
                'product_in_stock' => 'oui',
                'product_name' => 'Eloquent JavaScript',
                'product_prix' => '100',
                'updated_at' => '2021-05-27 12:08:24.000000',
            ),
            3 => 
            array (
                'categorie_id' => 2,
                'created_at' => '2021-05-30 16:17:24.000000',
                'id' => 4,
                'product_auteur' => 'vide',
                'product_description' => 'vide',
                'product_devise' => 'MAD',
                'product_image' => 'book3.jpg',
                'product_in_stock' => 'oui',
                'product_name' => 'Everything you need to age Math in one big fat notebook',
                'product_prix' => '40',
                'updated_at' => '2021-05-30 16:17:24.000000',
            ),
            4 => 
            array (
                'categorie_id' => 3,
                'created_at' => '2021-05-27 12:06:57.000000',
                'id' => 5,
                'product_auteur' => 'vide',
                'product_description' => 'vide',
                'product_devise' => 'MAD',
                'product_image' => 'java.jpg',
                'product_in_stock' => 'oui',
                'product_name' => 'Java: A Beginner’s',
                'product_prix' => '35',
                'updated_at' => '2021-05-27 12:06:57.000000',
            ),
            5 => 
            array (
                'categorie_id' => 4,
                'created_at' => '2021-05-30 16:19:43.000000',
                'id' => 6,
                'product_auteur' => 'vide',
                'product_description' => ' is a book of literary criticism published in 1926 by the Egyptian author Taha Hussein. In it, Hussein argued that some pre-Islamic poetry was inauthentic, and cast doubt on the authenticity of the Quran. The book\'s publication caused a major literary controversy in Egypt.',
                'product_devise' => 'MAD',
                'product_image' => 'book5.jpg',
                'product_in_stock' => 'oui',
                'product_name' => 'On Pre-Islamic poetry',
                'product_prix' => '120',
                'updated_at' => '2021-05-30 16:19:43.000000',
            ),
            6 => 
            array (
                'categorie_id' => 4,
                'created_at' => '2021-05-30 16:18:59.000000',
                'id' => 7,
                'product_auteur' => 'vide',
                'product_description' => 'vide',
                'product_devise' => 'MAD',
                'product_image' => 'book1.jpg',
                'product_in_stock' => 'oui',
                'product_name' => 'On the House: A Washington Memoir',
                'product_prix' => '20',
                'updated_at' => '2021-05-30 16:18:59.000000',
            ),
            7 => 
            array (
                'categorie_id' => 1,
                'created_at' => '2021-05-30 16:15:59.000000',
                'id' => 8,
                'product_auteur' => 'vide',
                'product_description' => 'vide',
                'product_devise' => 'MAD',
                'product_image' => 'pere.jpg',
                'product_in_stock' => 'oui',
                'product_name' => 'Père riche Père pauvre',
                'product_prix' => '40',
                'updated_at' => '2021-05-30 16:15:59.000000',
            ),
            8 => 
            array (
                'categorie_id' => 3,
                'created_at' => '2021-05-27 12:05:46.000000',
                'id' => 9,
                'product_auteur' => 'vide',
                'product_description' => 'When it comes to creating dynamic, database-driven Web sites, the PHP language and MySQL database offer a winning combination -- and with PHP 7, web professionals can achieve dramatic performance improvements. Combine these great open source technologies with Larry Ullman\'s PHP and MySQL for Dynamic Web Sites: Visual QuickPro Guide, Fifth Edition, and there\'s no limit to the powerful, interactive Web sites you can create.',
                'product_devise' => 'MAD',
                'product_image' => 'php.jpg',
                'product_in_stock' => 'vide',
                'product_name' => 'PHP and MySQL for Dynamic Web Sites',
                'product_prix' => '140',
                'updated_at' => '2021-06-02 20:52:03.000000',
            ),
            9 => 
            array (
                'categorie_id' => 3,
                'created_at' => '2021-05-27 12:09:12.000000',
                'id' => 10,
                'product_auteur' => 'vide',
                'product_description' => 'vide',
                'product_devise' => 'MAD',
                'product_image' => 'Python_Crash_Course.jpg',
                'product_in_stock' => 'non',
                'product_name' => 'Python Crash Course',
                'product_prix' => '0',
                'updated_at' => '2021-05-27 12:09:12.000000',
            ),
            10 => 
            array (
                'categorie_id' => 3,
                'created_at' => '2021-05-27 12:07:42.000000',
                'id' => 11,
                'product_auteur' => 'vide',
                'product_description' => 'vide',
                'product_devise' => 'MAD',
                'product_image' => 'linux.jpg',
                'product_in_stock' => 'oui',
                'product_name' => 'The linux command line',
                'product_prix' => '40',
                'updated_at' => '2021-05-27 12:07:42.000000',
            ),
        ));
        
        
    }
}