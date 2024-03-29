@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{route('home.update', $source)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
            <div class="card-body row">

                <div class="row align-content-center">
                    <div class="fileinput fileinput-new " data-provides="fileinput">
                        <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                                <span class="btn btn-outline-secondary btn-file">
                                  <span class="fileinput-new " style="margin-left: 10px; margin-right: 8px">{{ __('Select image') }}</span>
                                  <span class="fileinput-exists">Изменить</span>
                                  <input type="file" accept="image/*"  name="Image">
                                </span>
                            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-body row">
                        <select class="form-control"  name="#" >
                            <option value="1">{{__('Retailer')}}</option>
                            <option value="2">Author.Today</option>
                        </select>
                    </div>
                    <div class=" card-body row">
                        <select class="form-control"  name="#">
                            <option value="1">{{__('Genre')}}</option>
                            <option value="2">ЛитРПГ</option>
                        </select>
                    </div>
                    <script>

                        function enabled_disabled_select(f) {
                            var name_select = (f.name  == 'NameGenre') ? "Genre" : "Retailer";
                            // alert('asdasdasd')
                            if($(f).val() != '' ) {
                                $('select[name= name_select]').prop('disabled', true);
                            }
                            else {
                                $('select[name= name_select]').prop('disabled', false);
                            }
                        }

                        $(function() {
                            $('select[name="Retailer"]').change(function() {

                                // если значение не равно пустой строке
                                if($(this).val() != "1") {
                                    $('input[name="Title_Retailer"]').prop('disabled', true);
                                    $('input[name="Site"]').prop('disabled', true);
                                } else {

                                    $('input[name="Title_Retailer"]').prop('disabled', false);
                                    $('input[name="Site"]').prop('disabled', false);
                                }
                            });

                            $('select[name="Genre"]').change(function() {

                                if($(this).val() != "1") {
                                    $('input[name="NameGenre"]').prop('disabled', true);
                                }
                                else {
                                    $('input[name="NameGenre"]').prop('disabled', false);
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
                <input class="form-control col" type="text" maxlength="150" name="Title_Livre" value="{{$source}}">
            </div>

            <div class="card-body row">
                <div class="input-group  col">
                    <div class="input-group-prepend">
                        <span class="input-group-text">₽</span>
                    </div>
                    <input class="form-control" type="number" min="0" name="Price" placeholder={{__('Price')}}>
                </div>
                <div class="col">
                    <input class="form-control" type="number" min="0" name="Volume" placeholder={{__('Pages')}}>
                </div>
                <div class="col">
                    <input class="form-control " type="text" maxlength="50" name="NameGenre"  onkeyup="enabled_disabled_select(this)" placeholder={{__('Genre')}}>
                </div>


            </div>

            <div class="card-header">
                {{__('Retailer')}}
            </div>

            <div class="card-body row" style="padding-bottom: 1px">
                <input class="form-control col" type="text" maxlength="76" name="Title_Retailer"  onkeyup="enabled_disabled_select(this)" placeholder={{__('Title')}}>
                <input class="form-control col" type="text" maxlength="76" name="Site"  onkeyup="enabled_disabled_select(this)" placeholder={{__('Site')}}>
            </div>

            <div class="card-body row justify-content-between" >
                <a class="btn btn-primary my-1 col-sm-2" href="{{ URL::previous() }}">{{ __('Back') }}</a>
                <input type="submit" class="btn btn-primary my-1 col-sm-2" value="{{__('Add')}}">
            </div>
        </form>
    </div>

@endsection

