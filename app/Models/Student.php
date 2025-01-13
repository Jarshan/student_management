<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table ='_student_s';
    protected $primaryKey ='id';
    protected $fillable =['name','address','mobile'];
}
