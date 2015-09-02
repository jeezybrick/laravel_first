<!--Временно-->

<!--{!! Form::hidden('user_id',2) !!}-->


<div class="form-group">
    {!! Form::label('title','Заголовок:') !!}
    {!! Form::text('title',null,['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Содержание:') !!} 
    {!! Form::textarea('body',null,['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','Опубликована:') !!} 
    {!! Form::input('date','published_at',date('Y-m-d'),['class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list','Теги:') !!} 
    {!! Form::select('tag_list[]',$tags,null,['id'=>'tag_list','class' =>'form-control','multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class' =>'btn btn-primary form-control']) !!}
</div>


@section('footer')



@endsection