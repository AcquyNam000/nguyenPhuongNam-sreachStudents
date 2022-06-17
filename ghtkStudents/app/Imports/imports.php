<?php

namespace App\Imports;

use App\studentModel;
use App\testModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class imports implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    
    
        public function startRow(): int
    {
        return 6;
    }
    
    
    public function model(array $row)
    {
        
        
        return new studentModel([
            //
            'primarySchool' => $row[1],
            'district' => $row[2],   
            'id' => $row[3],
            '_class' => $row[4],
            'fullName' => $row[5],
            'DobDay' => $row[6],
            'DobMonth' => $row[7],
            'DobYear' => $row[8],
            'sex' => $row[9],
            'address' => $row[10],
            'ethnic' => $row[11],
            'currentAddress' => $row[12],
            'telephoneNumber' => $row[13],
            'firstGradeResults' => $row[14],
            'secondGradeResults' => $row[15],
            'thirdGradeResults' => $row[16],
            'fourthGradeResults' => $row[17],
            'fifthGradeResults' => $row[18],
             'note' => $row[22],
            
                      
        ]);
    }
}
