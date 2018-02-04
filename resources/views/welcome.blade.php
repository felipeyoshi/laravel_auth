@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Login Page</div>

                    @if(Auth::check())
                      <h1>You are logged in!</h1>
                    @endif


            </div>
            @if(Auth::guest())
              <a href="/login" class="btn btn-info"> You need to login first</a>
            @endif
        </div>
    </div>
</div>
@endsection
