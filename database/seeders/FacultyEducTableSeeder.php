<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacultyEducTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faculty_educ')->delete();
        
        \DB::table('faculty_educ')->insert(array (
            0 => 
            array (
                'faculty_id' => 3,
                'has_unders' => 1,
                'unders_enrolled' => 'Emilio Aguinaldo College',
                'unders_year_received' => 2000,
                'has_masters' => 0,
                'masters_enrolled' => '',
                'masters_year_received' => 0,
                'has_doctors' => 0,
                'doctors_enrolled' => '',
                'doctors_year_received' => 0,
                'academe_points' => 0,
            ),
            1 => 
            array (
                'faculty_id' => 26,
                'has_unders' => 1,
                'unders_enrolled' => 'Batangas State University',
                'unders_year_received' => 2001,
                'has_masters' => 0,
                'masters_enrolled' => '',
                'masters_year_received' => 0,
                'has_doctors' => 0,
                'doctors_enrolled' => '',
                'doctors_year_received' => 0,
                'academe_points' => 0,
            ),
            2 => 
            array (
                'faculty_id' => 69,
                'has_unders' => 1,
                'unders_enrolled' => 'UP Diliman',
                'unders_year_received' => 2003,
                'has_masters' => 0,
                'masters_enrolled' => '',
                'masters_year_received' => 0,
                'has_doctors' => 0,
                'doctors_enrolled' => '',
                'doctors_year_received' => 0,
                'academe_points' => 0,
            ),
            3 => 
            array (
                'faculty_id' => 223,
                'has_unders' => 1,
                'unders_enrolled' => 'Perpetual University of the Philippines',
                'unders_year_received' => 2007,
                'has_masters' => 0,
                'masters_enrolled' => '',
                'masters_year_received' => 0,
                'has_doctors' => 0,
                'doctors_enrolled' => '',
                'doctors_year_received' => 0,
                'academe_points' => 0,
            ),
            4 => 
            array (
                'faculty_id' => 412,
                'has_unders' => 1,
                'unders_enrolled' => 'EAC - Cavite',
                'unders_year_received' => 2004,
                'has_masters' => 1,
                'masters_enrolled' => 'Batangas State University',
                'masters_year_received' => 0,
                'has_doctors' => 1,
                'doctors_enrolled' => 'Batangas State University',
                'doctors_year_received' => 2008,
                'academe_points' => 0,
            ),
        ));
        
        
    }
}