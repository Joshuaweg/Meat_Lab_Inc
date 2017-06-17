@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!</br>
                      <?php $postid2 ?>
                    @foreach($posts as $post) 
                    <p>{{$post->postAuthor->Username}} : {{$post->body}}

                    </p></br>
                    <p>Comment/{{$post->postAuthor->Username }}:</p></br>
                   @foreach($comments as $comment)
                   <p>{{$comment->body}}</p>
                   @endforeach
                    @if($post->postAuthor->id === $user->id)
                        <?php $postid = $post->id;
                               $postid2 = $postid;
                        ?>
                        {!!Form::open(array('route'=>array('forumposts.edit',$postid2), 'method'=>'GET'))!!}
                        {!!Form::submit('edit')!!}
                        {!!Form::close()!!}
                    @endif
                        {!!Form::open(array('url'=>array('/makecomment', $postid2), 'method'=>'GET'))!!}
                        {!!Form::submit('comment')!!}
                        {!!Form::close()!!}
                    @endforeach
                    </br>
                    </br>
                    <h3>Add Post</h3>
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
