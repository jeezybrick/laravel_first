@extends('app')

@section('content')

  <h1>Статьи</h1>
  <a href="articles/sortByName"><h2>Сортировать по имени</h2></a>
  <hr>
  @foreach($articles as $article)
   
       <h4>
       Опубликовал:
       <a href="/user/{{$article->user()->first()->id}}">{{$article->user()->first()->name}}</a>
       </h4>
    <article>
      <h2>
      <a href="/articles/{{$article->id}}"> {{$article->title}}</a>
      </h2>

      <div class="body">{{$article->body}}</div>
    </article>
    <div class="btn-group btn-group-sm" role="group" aria-label="...">
    <a class="btn btn-default" href="<?=URL::to('articles',array($article->id))?>/edit">
  <i class="fa fa-cog"></i> Редактировать</a>
    <a class="btn btn-danger" href="<?=URL::to('articles',array($article->id))?>/delete" onclick="return confirm('Вы уверены,что хотите удалить эту статью?')" id="deleteUs">
  <i class="fa fa-trash-o fa-lg"></i> Удалить</a>
</div>
   <hr>
   <!--    
    <a href="<?=URL::to('articles',array($article->id))?>/edit">
       <span class="glyphicon glyphicon-pencil"></span></a>
    <a href="<?=URL::to('articles',array($article->id))?>/delete" onclick="return confirm('Вы уверены,что хотите удалить пользователя?')" id="deleteUs">
       <span class="glyphicon glyphicon-remove"></span></a>
        --> 
      
    @endforeach
    
@stop
