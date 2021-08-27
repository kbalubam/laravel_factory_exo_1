<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('formations')->insert([
            [
            "nom"=>"informatique",
            "description"=>"etude tech"
            ],
            
            [
            "nom"=>"economie",
            "description"=>"etude eco"
            ],

            [
            "nom"=>"dessin",
            "description"=>"etude dessin"
            ],

            [
            "nom"=>"archi",
            "description"=>"etude archi"
            ],

            [
            "nom"=>"pysho",
            "description"=>"etude psycho"
            ],

            [
            "nom"=>"inge",
            "description"=>"etude inge"
            ],

            [
            "nom"=>"athlete",
            "description"=>"etude sport",
            ],
            
        ]);
    }
}
