<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testModel extends Model
{
    //
        public $timestaps = false;
    protected  $fillable = 
      [
           'id'
      ];
    
    protected $primaryKey = 'id';
    protected $table = 'tbl_test';
}
