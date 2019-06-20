@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('home.store')}}" method="POST">
        @csrf
        <div class="card-body row">

            <div class="row align-content-center">
                <div class="fileinput fileinput-new " data-provides="fileinput">
                    <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                    <div>
                                <span class="btn btn-outline-secondary btn-file">
                                  <span class="fileinput-new " style="margin-left: 10px; margin-right: 8px">{{ __('Select image') }}</span>
                                  <span class="fileinput-exists">Change</span>
                                  <input type="file" accept="image/*"  name="Image">
                                </span>
                        <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
            </div>

        <div class="col">
            <div class="card-body row">
                <select class="form-control" title="lol" name="Retailer" >
                    <option value="1">{{__('Retailer')}}</option>
                    <option value="2">Соска</option>
                </select>
            </div>
            <div class=" card-body row">
                <select class="form-control" name="Genre">
                    <option value="">{{__('Genre')}}</option>
                </select>
            </div>
            <script>
                // после загрузки страницы
                $(function() {
                    // установить кнопки свойство disabled, равное true (т.е. сделать её не активной)
                    $('input[name="Title_Retailer"]').prop('disabled', false);
                    $('input[name="Site"]').prop('disabled', false);
                    $('input[name="Genre"]').prop('disabled', false);

                    // при отпускании клавиши, проверить значение данного поля
                    $('input[name="Retailer"]').(function() {

                        var selector = document.getElementsByName('Retailer');
                        var value = selector[selector.selectedIndex].value;
                        // если значение не равно пустой строке
                        if(document.getElementsByName("Источник").) {
                            // то сделать кнопку активной (т.е. установить свойству disabled кнопки значение false
                            $('input[name="Title_Retailer"]').prop('disabled', true);
                            $('input[name="Site"]').prop('disabled', true);
                        }
                    });
                    $('input[name="search"]').keyup(function() {
                        // если значение не равно пустой строке
                        if($(this).val() != '') {
                            // то сделать кнопку активной (т.е. установить свойству disabled кнопки значение false
                            $('input[name="Genre"]').prop('disabled', true);
                        }
                    });
                });
            </script>
    {{--        <div class="card-body row">--}}
    {{--            <div class="row">--}}
    {{--                <div class='col-sm-6'>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <div class='input-group date' id='datetimepicker1'>--}}
    {{--                            <input type='text' class="form-control" />--}}
    {{--                            <span class="input-group-addon">--}}
    {{--                        <span class="glyphicon glyphicon-calendar"></span>--}}
    {{--                    </span>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <script type="text/javascript">--}}
    {{--                    $(function () {--}}
    {{--                        $('#datetimepicker1').datetimepicker();--}}
    {{--                    });--}}
    {{--                </script>--}}
    {{--            </div>--}}
    {{--        </div>--}}

        </div>

        </div>


{{--        <div class="card-body row">--}}
{{--            {{ Form::color('email', '' , array('class' => 'form-control col', 'placeholder' => 'Что-то там', 'type'=> 'color'))}}--}}
{{--        </div>--}}

        <div class="card-body row">
            <input class="form-control col" type="text" name="Title_Livre" placeholder={{__('Book')}}>
        </div>

        <div class="card-body row">
            <div class="input-group  col">
                <div class="input-group-prepend">
                    <span class="input-group-text">₽</span>
                </div>
                <input class="form-control" type="number" name="Price" placeholder={{__('Price')}}>
            </div>
            <div class="col">
                <input class="form-control" type="number" name="Volume" placeholder={{__('Pages')}}>
            </div>
            <div class="col">
                <input class="form-control " type="text" name="NameGenre" placeholder={{__('Genre')}}>
            </div>


        </div>

        <div class="card-header">
            {{__('Retailer')}}
        </div>

        <div class="card-body row" style="padding-bottom: 1px">
            <input class="form-control col" type="text" name="Title_Retailer" placeholder={{__('Title')}}>
            <input class="form-control col" type="text" name="Site" placeholder={{__('Site')}}>
        </div>

        <div class="card-body row justify-content-between" >
            <a class="btn btn-primary my-1 col-sm-2" href="{{ URL::previous() }}">{{ __('Back') }}</a>
            <input type="submit" class="btn btn-primary my-1 col-sm-2" value="{{__('Add')}}">
        </div>








    </form>
</div>

@endsection

