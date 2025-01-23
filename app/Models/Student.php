<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    protected $table ='_student_s';
    protected $primaryKey ='id';
    protected $fillable =['name','address','mobile'];
    use HasFactory;
    
}
