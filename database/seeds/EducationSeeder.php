<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $educations = ['High School', 'Under Graduate', 'Graduate'];

        foreach( $educations as $education ) {

            \App\Entities\Education::firstOrCreate(['name' => $education ]);
        }
    }
}
