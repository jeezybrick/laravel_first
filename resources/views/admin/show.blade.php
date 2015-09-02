@extends('app')

@section('content')

<h1>Инфа о пользователе</h1>

   <strong>Имя:</strong> {{$users->name}}<br>
   <strong>Email:</strong> {{$users->email}}<br>
    
    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Показать все статьи пользователя
</a>
    
    <div class="collapse" id="collapseExample">
  <div class="well">
   @foreach($userArticles as $article)
  
    <article>
      <h2>
      <a href="/articles/{{$article->id}}"> {{$article->title}}</a>
      </h2>

      <div class="body">{{$article->body}}</div>
    </article>


    @endforeach
  </div>
</div>

  
 


@stop
