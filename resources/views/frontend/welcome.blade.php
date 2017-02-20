@extends('frontend.layouts.app')

@section('content')


    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="box box-success">
            Public Api for Forex<br>
            <a class="btn btn-success btn-lg" href="{{url('register/forex/public')}}">Register Now</a>
            </div>
            </div>
        </div> 
        <div class="col-md-4">
            Private Api for Forex<br>
            <a class="btn btn-success btn-lg">Register Now</a>
        </div>
        <div class="col-md-4">
           Private Api for Rashifal Nepal/English<br>
           <a class="btn btn-success btn-lg">Register Now</a>
       </div>
   </div>

@endsection