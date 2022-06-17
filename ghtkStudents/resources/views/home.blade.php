@extends('trangchu')
@section('contents')
    <!--  phần body  -->


        <div class="img_logo centerText">
                    <img src="{{asset('public/fontend/video_and_img/logo.png')}}" alt="logo ghtk">
        </div>

    <form class="row" action="{{url('/processing')}}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
         <input  class="inport col c-6" type="file" name="file" accept=".xlsx" id="" required> 
                    <input class="inport col c-6 " type="submit" value="import"> 
        </form>

   
    


 @endsection
