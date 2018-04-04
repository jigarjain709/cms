<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class StudentAdminTimetable extends Model
{
  protected $table="timetables";
  protected $fillable= ['day', 'subject1', 'subject2', 'subject3', 'subject4', 'subject5', 'subject6', 'subject7', 'teacher1', 'teacher2', 'teacher3', 'teacher4', 'teacher5', 'teacher6', 'teacher7'];

  // protected $table="teacher_timetables";
}
