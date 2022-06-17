<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    //
    public $timestaps = false;
    protected  $fillable = 
      [
           'primarySchool','id','district','_class','fullName','DobDay','DobMonth','DobYear','sex','address','ethnic'
          ,'currentAddress','telephoneNumber','firstGradeResults','secondGradeResults',
          'thirdGradeResults','fourthGradeResults','fifthGradeResults','note'
      ];
    
    protected $primaryKey = 'id';
    protected $table = 'tbl_students';
}
