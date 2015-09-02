@extends('app') @section('content')

<h1>Админка</h1>
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#ordersTable" aria-controls="home" role="tab" data-toggle="tab">Заказы</a>
    </li>
    <li role="presentation"><a href="#articlesTable" aria-controls="profile" role="tab" data-toggle="tab">Статьи</a>
    </li>
    <li role="presentation"><a href="#usersTable" aria-controls="messages" role="tab" data-toggle="tab">Пользователи</a>
    </li>
</ul>

<div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="usersTable">
     @if (count($users) > 0)
        <div class="table-responsive">
            <!-- Таблица для редактирования пользователей -->
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>Имя</td>
                    <td>Email</td>
                    <td>Создан</td>
                    <td>Обновлен</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td align="center">
                        <a href="<?=URL::to('admin/editUser',array($user->id))?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td align="center">
                        <a href="<?=URL::to('admin/deleteUser',array($user->id))?>" onclick="return confirm('Вы уверены,что хотите удалить пользователя?')">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        @else
        <h3>Пользоватали отсутствуют!</h3> @endif
    </div>
    <!-- Таблица для редактирования заказов -->
    <div role="tabpanel" class="tab-pane active" id="ordersTable">
      @if (count($orders) > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>Дата</td>
                    <td>Заказчик</td>
                    <td>Авто</td>
                    <td>Поломка</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                @forelse($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->date }}</td>
                    <td>{{ $order->customer()->first()->fio }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                    <td align="center">
                        <a href="<?=URL::to('admin/editOrder',array($order->id))?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td align="center">
                        <a href="<?=URL::to('admin/deleteOrder',array($order->id))?>" onclick="return confirm('Вы уверены,что хотите удалить заказ?')">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
                @empty
                    {{--<p>Заказов пока-что нет :(</p>--}}
                @endforelse
            </table>
        </div>
      @else
      <h3>Заказов пока-что нет :(</h3> @endif
    </div>
<!-- Таблица для редактирования статей -->
    <div role="tabpanel" class="tab-pane" id="articlesTable">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>Пользователь</td>
                    <td>Заголовок</td>
                    <td>Тело</td>
                    <td>Опубликован</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                @forelse($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->user()->first()->name}}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->published_at }}</td>
                    <td align="center">
                        <a href="<?=URL::to('articles',array($article->id))?>/edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td align="center">
                        <a href="<?=URL::to('articles',array($article->id))?>/delete" onclick="return confirm('Вы уверены,что хотите удалить заказ?')">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
                 @empty
                   <p>Пользователей пока-что нет :(</p>
                @endforelse
            </table>
        </div>
    </div>
</div>

@stop