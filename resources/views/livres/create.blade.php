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
                                  <input type="file" accept="image/*"  name="...">
                                </span>
                        <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
            </div>

        <div class="col">

            <div class="card-body row">
                <select class="form-control">
                    <option>{{__('Retailer')}}</option>
                </select>
            </div>
            <div class=" card-body row">
                <select class="form-control">
                    <option>{{__('Genre')}}</option>
                </select>
            </div>
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
            <input class="form-control col" type="text" placeholder={{__('Book')}}>
        </div>

        <div class="card-body row">
            <input class="form-control col" type="number" placeholder={{__('Price')}}>
            <input class="form-control col" type="number" placeholder={{__('Pages')}}>
            <input class="form-control col" type="text" placeholder={{__('Genre')}}>
        </div>

        <div class="card-header">
            {{__('Retailer')}}
        </div>

        <div class="card-body row" style="padding-bottom: 1px">
            <input class="form-control col" type="text" placeholder={{__('Title')}}>
            <input class="form-control col" type="text" placeholder={{__('Site')}}>
        </div>

        <div class="card-body row justify-content-between" >
            <a class="btn btn-primary my-1 col-sm-2" href="{{ URL::previous() }}">{{ __('Back') }}</a>
            <input type="submit" class="btn btn-primary my-1 col-sm-2" value="{{__('Add')}}">
        </div>








    </form>
</div>

@endsection

