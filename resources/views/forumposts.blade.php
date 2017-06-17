@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body"></br>
                   
                    </br>
                    </br>
                    <h3>Edit Post</h3>
                    {!!Form::open(array('action'=>array('PostForumResourceController@update',$postid, $forumP, $forumPost),'method'=>'PUT'))!!}
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
