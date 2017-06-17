@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   
                    </br>
                    </br>
                    <h3>Add comment to post</h3>
                    {!!Form::open(array('url'=>array('/savemakecomment',$postid2),'method'=>'POST'))!!}
                    {{!!Form::textarea('comment')!!}
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
