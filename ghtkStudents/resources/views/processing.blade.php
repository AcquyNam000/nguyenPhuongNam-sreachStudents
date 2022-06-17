@extends('trangchu')
@section('contents')
    <!--  phần body  -->


   <form action="{{url('/sreach')}}" method="post">
       {{@csrf_field()}}
                        <div  class="tb_ip">
                             <input type="text" name="sreachName" id="" placeholder="Họ và tên">
                        </div>
                        <div class="tb_ip">
                            <input type="text" name="sreachId" id="" placeholder="Mã học sinh">
                        </div>
                        
                        <div class="bl_btn_tk">
                                <input class="btn_tk" type="submit" value="TÌM KIẾM">
                        </div>
            </form>

            <div style="height: 300px;" id="bangTimkiem">
                <table border="1" width="400%" style="text-align: center;" >
  <tr>
    <th>STT</th>
    <th>Trường Tiểu học</th>
    <th>Huyện</th>
    <th>Mã học sinh</th>
    <th>Lớp</th>
    <th>Họ và tên</th>
    <th>ngày sinh</th>
    <th>/ tháng sinh</th>
    <th>/ năm sinh</th>
    <th>Giới tính</th>
    <th>Nơi sinh</th>
    <th>Dân tộc</th>
    <th>Hộ khẩu thường trú</th>
    <th>Điện thoại liên hệ</th>
    <th>Điểm năm nhất</th>
    <th>Điểm năm hai</th>
    <th>Điểm năm ba</th>
    <th>Điểm năm bốn</th>
    <th>Điểm năm năm</th>
    <th>Điểm tổng kết</th>
    <th>Ghi chú</th>
    
  </tr>

    @foreach( $datas as $key => $student )
       {{@csrf_field()}}
       <?php
            $i = 0;
       ?>
    <tr>
    <td>{{ $key }}</td>
    <td>{{ $student->primarySchool }}</td>
    <td>{{ $student->district }}</td>
    <td>{{ $student->id }}</td>
    <td>{{ $student->_class }}</td>
    <td>{{ $student->fullName }}</td>
    <td>{{ $student->DobDay }}</td>
    <td>{{ $student->DobMonth }}</td>
    <td>{{ $student->DobYear }}</td>
    <td>{{ $student->sex }}</td>
    <td>{{ $student->address }}</td>
    <td>{{ $student->ethnic }}</td>
    <td>{{ $student->currentAddress }}</td>
    <td>{{ $student->telephoneNumber }}</td>
    <td>{{ $student->firstGradeResults }}</td>
    <td>{{ $student->secondGradeResults }}</td>
    <td>{{ $student->thirdGradeResults }}</td>
    <td>{{ $student->fourthGradeResults }}</td>
    <td>{{ $student->fifthGradeResults }}</td>
        <?php
        $i = $student->firstGradeResults + $student->secondGradeResults + $student->thirdGradeResults + $student->fourthGradeResults + $student->fifthGradeResults  ;
        ?>
    <td><?= $i; ?></td>
    <td>{{ $student->note }}</td>
    </tr>
           
    @endforeach;

</table>
            </div>
   
  
 @endsection
