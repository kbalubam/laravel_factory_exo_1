<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('typeformations')->insert([
            [
            "nom"=>"eco",
            
            ],
            
            [
            "nom"=>"math"
            ],

            [
            "nom"=>"geo",
            
            ],

            [
            "nom"=>"tech",
            
            ],

            [
            "nom"=>"astro",
            
            ],

            [
            "nom"=>"cusine",
           
            ],

            [
            "nom"=>"sport",
            ],

            [
            "nom"=>"electricité",
            ],

            [
            "nom"=>"medecine",
            ],

            [
            "nom"=>"physique",
            ],

            [
            "nom"=>"code",
            ],


            
        ]);
    }
}
