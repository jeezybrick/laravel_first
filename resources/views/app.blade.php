<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Diplom 2015 on Laravel">
    <meta name="author" content="Andrey Stacenko">
    <title>ОАО Автосервис</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/multiple-select.css" />
    <link rel="stylesheet" href="/css/animations.css">
    <style>
        starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <!--[if IE]>
<script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="top_name col-lg-3 col-md-3 col-sm-4">
               <div class="animatedParent">
               <a href="/" style="text-decoration:none;">
                <h1 class="hidden-xs animated bounceIn" style="font-weight:600;">Автосервис</h1></a>
                </div>
                <h1 class="hidden-lg hidden-md hidden-sm" style="font-weight:600;" align="center">Автосервис</h1>
            </div>
            <div class="image_top col-lg-4 col-md-5 col-sm-3 hidden-xs">
               <div class="animatedParent">
                <img src="/image/object70115285.png" class="img-responsive animated lightSpeedInRight" alt="">
                </div>
            </div>
            <div class="animatedParent">
            <div class="contact_top col-lg-5 col-md-4 col-sm-5 hidden-xs animated fadeInDownShort">
                <p class="city">
                    <a href="https://www.google.ru/maps/@47.8443854,35.1274113,12z?hl=ru" target="_blank"><!-- data-toggle="tooltip" title="Открыть карту Запорожья"  data-placement="bottom" -->
                        <var><span id="cityTooltip" style="border-bottom: 1px dashed;">Запорожье</span></var>
                    </a>
                </p>
                <p class="time">Время работы: будни 10:00 - 19:00</p>
                <p class="phone"><strong>0(612)77-55-33</strong>
                </p>
                <a class="email" href="mailto:avtoservice@avtoservice.zp.ua" style="text-decoration: underline;">
                    <em>avtoservice@avtoservice.zp.ua</em>
                </a>
                @if (Auth::guest())
                <p class="button_log_head">
                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                        Войти
                    </button>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal_reg">
                        Регистрация
                    </button>
                </p>
                @else
                <h5 class="dropdown" style="margin-bottom:5px;">        
                 Добро пожаловать,
                 <a href="/user/{{ Auth::user()->id}}" style="color:red;"
                 class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                 <strong>{{ Auth::user()->name }}!</strong></a> 
                
                  <ul class="dropdown-menu" role="menu" style="position:absolute;margin-left:270px;">
                        <li><a href="/user/{{ Auth::user()->id}}">Личный кабинет</a>
                        </li>
                        <li><a href="{{ url('/auth/logout') }}">Выйти</a>
                        </li>
                    </ul>
               </h5> 
                @endif
             @include('partials.last_art')
            </div>
            </div>
        </div>
        <!-- Static navbar -->
        
         @include('partials.nav')
     

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron" style="padding-top:20px;">
            <!-- Всплывающая подсказка 
           "Ваша новость была создана!"
            -->
            @if(Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('flash_message')}}
            </div>

            @endif 
            
            @yield('content')

        </div>

       
        <footer class="footer clearfix">
            <p><a href="/">На главную</a> | <a href="/orders/create">Заказать ТО</a> | <a href="/contacts">Контакты</a> | <a href="#" data-toggle="modal" data-target="#myModal_project" id="sos_proj">Состояние проекта</a>
            </p>
            <p>Copyright © Стаценко А.С. 2015. All Rights Reserved.</p>
        </footer>
    </div>

    @include('modals.modals')

    <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src='/js/css3-animate-it.js'></script>
    <script src="/js/jquery.multiple.select.js"></script>
    <script src="/js/jqmeter.min.js"></script>

    <script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.user = '';
    $scope.email = '';
});
</script>

    <script>
          <!-- Скрипт для спойлера при регистрации -->
    $(document).ready(function(){
        $("#avtoInfo").hide();
        $("#avtoInfoClick").click(function(){
            $("#avtoInfo").toggle("fast");
        });
    });
    </script>

    <!-- Скрипт для "состояние проэкта" -->
    <script>  
        $(document).ready(function(){
    $("#sos_proj").click(function(){
        $('#jqmeter-container').jQMeter({
    goal:'$1,000',
    raised:'$800',
    meterOrientation:'horizontal',
    width:'200px',
    height:'30px',
    animationSpeed: 1500,
    counterSpeed:1500
});
    });
});
    </script>
      <!-- Скрипт для смены надписи на конке при ее нажатии -->
<script>
  $('#buttonSearch').on('click', function () {
    $(this).button('complete') // button text will be "finished!"
  });
</script>
      <!-- Скрипт для мультивыбора элементов -->
    <script>
        $('#tag_list').multipleSelect();
    </script>
    <!-- Скрипт для появление надписи при наведении на элемент(tooltip bootstrap) -->
    <script>
$(document).ready(function(){
    $('#cityTooltip').tooltip({title: "Открыть карту Запорожья", delay: 500, placement: "left"});    
});
</script>
    <!-- Скрипт для переключений вкладок в админ-панели -->
     <!--  <script>
    $(document).ready(function(){
        
         $("#usersTable").hide();        
         $("#articlesTable").hide();
         $("#liAdminFirst").addClass("active");
        
        $("#ordersTableActive").click(function(){
         $("#liAdminFirst").addClass("active");
         $("#liAdminSecond").removeClass("active");
         $("#liAdminThird").removeClass("active");
         $("#ordersTable").show();
         $("#usersTable").hide();   
         $("#articlesTable").hide();
    });
    $("#usersTableActive").click(function(){
        $("#liAdminSecond").addClass("active");
        $("#liAdminFirst").removeClass("active");
        $("#liAdminThird").removeClass("active");
        $("#usersTable").show();
        $("#ordersTable").hide();
        $("#articlesTable").hide();
    });

        $("#articlesTableActive").click(function(){
        $("#liAdminThird").addClass("active"); 
        $("#liAdminFirst").removeClass("active");
        $("#liAdminSecond").removeClass("active");    
        $("#articlesTable").show();
        $("#ordersTable").hide();
        $("#usersTable").hide();    
             
    });

});
        </script>-->

     @yield('footer')
</body>

</html>