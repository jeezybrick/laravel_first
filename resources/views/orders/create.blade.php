@extends('app') @section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h1>Заказать ТО</h1>
    </div>
    <div class="panel-body">
       <!--   {!! Form::open(['url'=>'orders/create','class' =>'form-horizontal']) !!}-->
   
      <form ng-app="myApp" ng-controller="validateCtrl" name="myForm" class="form-horizontal" role="form" method="POST"  action="{{ url('/orders') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="inputIni" class="col-sm-2 control-label">Фамилия и инициалы</label>
            <div class="col-sm-5">

                <input type="text" class="form-control" id="inputIni" name="fio" maxlength="30" placeholder=""  ng-model="user" required>
                <span style="color:red" ng-show="myForm.fio.$dirty && myForm.fio.$invalid">
                 <span ng-show="myForm.fio.$error.required">Обязательное поле.</span>
                </span>
                <span class="help-block">Например:Иван Иванов.</span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputTel" class="col-sm-2 control-label">Телефон</label>
            <div class="col-sm-5">
                <input type="tel" name="phone" class="form-control" id="inputTel" pattern="[0-9]{3,15}" placeholder=""  required>
                <span class="help-block">Например:0965458797.</span>
            </div>
        </div>
        <!-- <li class="divider"></li>-->
        <div class="form-group">
            <label for="inputModel" class="col-sm-2 control-label">Марка и модель автомобиля</label>
            <div class="col-sm-5">
                <select class="form-control" id="model_avto" name="avto_name">
                    <option>ВАЗ-2103</option>
                    <option>ВАЗ-2105</option>
                    <option>ВАЗ-2106</option>
                    <option>ВАЗ-2107</option>
                    <option>ЗАЗ-968</option>
                    <option>Таврия</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputReason" class="col-sm-2 control-label">Причина обращения</label>
            <div class="col-sm-5">
                <textarea class="form-control" rows="3" name="r_name"  required></textarea>
                <span class="help-block">Например:Поломка двигателя.</span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputDate" class="col-sm-2 control-label">Желаемая дата и время</label>
            <div class="col-sm-5">
                <textarea class="form-control" rows="1" name="date"></textarea>
                <span class="help-block">Например:16 июля.</span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <button type="submit" class="btn btn-primary btn-lg btn-block" ng-disabled="myForm.fio.$dirty && myForm.fio.$invalid">Отправить заявку</button>
            </div>
        </div>
        <!--  {!! Form::close() !!}-->
        </form>
    </div>
</div>

@stop