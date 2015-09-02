@extends('app')

@section('content')

  <h1>{{$article->title}}</h1>

    <article>
    {{$article->body}}
    </article>
    
    @unless($article->tags->isEmpty())
    <h5 style="margin-bottom:0px;">Теги:</h5>
     <ul>
         @foreach($article->tags as $tag)
         
         <li>{{$tag->name}}</li>
         
         @endforeach
     </ul>
     @endunless
     
<h5>Опубликована: {{$time}}</h5>

@stop
