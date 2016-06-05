@extends('layouts.app')

@section('header')
    @include('layouts.header')
@endsection


@section('breadcrumbs')
    {!! Breadcrumbs::render('home') !!}
@endsection

@section('content')
<div class="container">
    <div class="row">
      <!--   <div class="col-md-12 col-md-offset-1"> -->
      <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! naveen
                    <div><a href="/showfriend" class="btn btn-primary btn-lg">show freand</a> 
                    
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