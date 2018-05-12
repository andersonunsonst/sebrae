<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    
    public function getCourses() {
     return	DB::table('courses')
            ->join('addresses', 'addresses.id_address', '=', 'courses.id_course')
          
            ->select('courses.*', 'addresses.city')
            ->get();
    }

    public function getCoursesConsultant() {
     return	DB::table('courses')
            ->join('consultants', 'consultants.id_consultant', '=', 'courses.id_course')
            ->join('addresses', 'addresses.id_address', '=', 'courses.id_course')
            ->select('*')
            ->get();
    }
}
