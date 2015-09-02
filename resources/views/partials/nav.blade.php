<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="/">Автосервис</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li @if (Request::path()=='/' ) class="active" @endif><a href="/">Главная</a>
                </li>
                <li @if (Request::path()=='orders/create' ) class="active" @endif><a href="/orders/create">Заказать ремонт</a>
                </li>

                <li @if (Request::path()=='about' ) class="active" @endif><a href="/about">Услуги</a>
                </li>

                <li @if (Request::path()=='contacts' ) class="active" @endif><a href="/contacts">Контакты</a>
                </li>




                @if (Auth::guest())
                <li class="divider hidden-lg hidden-md hidden-sm"></li>
                <li class="hidden-lg hidden-md hidden-sm">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                        Войти
                    </button>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal_reg">
                        Регистрация
                    </button>
                </li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Личный кабинет <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li @if (Request::path()=='articles' ) class="active" @endif><a href="/articles">Статьи</a>
                        </li>
                        <li @if (Request::path()=='articles/create' ) class="active" @endif><a href="/articles/create">Добавить статью</a>
                        </li>
                        <li @if (Request::path()=='admin' ) class="active" @endif><a href="/admin">Admin-панель</a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Настройки</li>
                        <li><a href="#">Мои настройки</a>
                        </li>
                        <li style="background-color:#FF9999"><a href="{{ url('/auth/logout') }}">Выйти</a>
                        </li>
                    </ul>
                </li>
                @endif

            </ul>
            <form class="navbar-form navbar-right hidden-sm hidden-xs" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Поиск...">
                </div>
                <button id="buttonSearch" type="submit" class="btn btn-default" data-complete-text="Ищу..." autocomplete="off">Найти</button>
            </form>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>