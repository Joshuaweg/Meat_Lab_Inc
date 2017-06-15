@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!</br>
                    @foreach($posts as $post)
                    <p>{{$post->postAuthor->Username}} : {{$post->body}}</p></br>
                    @endforeach
                    </br>
                    </br>
                    {!!Form::open(array('url'=>'/savecomment','method'=>'POST'))!!}
                    {{!!Form::textarea('body')!!}
                    {!!Form::Submit('Submit')!!}
                    {!!Form::close()!!}

                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
