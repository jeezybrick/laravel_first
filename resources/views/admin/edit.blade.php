@extends('app')
@section('content')

 <h2>Редактируем: {!! $users->name!!}</h2>

  {!! Form::model($users,['method' => 'POST','action' => ['AdminController@updateUser',$users->id]]) !!}

       <div class="form-group">
       {!! Form::label('name','Имя:') !!}
       {!! Form::text('name',null,['class' =>'form-control']) !!}
     </div>

     <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::text('email',null,['class' =>'form-control']) !!}
     </div>


     <div class="form-group">
            {!! Form::submit('Редактировать',['class' =>'btn btn-primary form-control']) !!}
     </div>

    {!! Form::close() !!}


 @stop