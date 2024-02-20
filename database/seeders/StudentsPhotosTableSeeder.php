<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students_photos')->delete();
        
        
        
    }
}