@extends('layouts.app')
@section('header')
    @include('layouts.header')
@endsection
@section('breadcrumbs')
     {!! Breadcrumbs::render('viewprofile', $id ); !!}
@endsection

@section('content')
<!-- view -->
    <div class="container">
        <div class="row">
          <!--   <div class="col-md-12 col-md-offset-1"> -->
        <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">  user detail: 
                    </div>

                    <div class="panel-body">      

                        <div style="background-color: #f5f5f5; color: #000000; height: auto;">
                            <div  class="col-md-12">
                                <div class="col-md-3"><b>Your User name : </b></div> 
                                <div class="col-md-9"> 
                                     {{ $user->username }}
                                     <p>This is your full user name </p>
                                </div>
               <hr><hr><hr>
                              <div class="col-md-3"><b>Your first name : </b></div> 
                                <div class="col-md-9">{{ $user->first_name }}</div>
                                 <p>This is your full user name </p>
       <hr>                   
                                <div class="col-md-3"><b>Your Last name : </b></div> 
                                <div class="col-md-9">{{ $user->last_name }}</div>
                                 <p>This is your full user name </p>
       <hr>                    
                                <div class="col-md-3"><b>Your User email : </b></div> 
                                <div class="col-md-9">{{ $user->email }}</div>
                                 <p>This is your full user name </p>
       <hr>
                            <div style="margin-top: 50px">
                                <a href="{{ url('/editprofile/'.Auth::user()->id)}}" class="btn btn-primary btn-lg">Edit Profile</a> 
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection



@section('footer')
    @include('layouts.footer');
@endsection
