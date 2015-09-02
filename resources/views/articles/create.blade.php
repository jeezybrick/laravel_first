@extends('app')

@section('content')

  <h1>Добавить новую статью</h1>

  <hr />
  @include('errors.list')
  
  
  {!! Form::open(['url'=>'articles']) !!}

   @include('articles.form',['submitButtonText' => 'Добавить статью'])

  {!! Form::close() !!}


  

@stop
