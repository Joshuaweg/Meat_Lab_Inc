@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  {!!Form::open(array('url'=>'/savebio','method'=>'POST'))!!}
                  <p>Biography: {!!Form::textarea('Biography')!!}</p>{!!Form::submit('Change Biography')!!}
                  {!!Form::close()!!}
                  

                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
