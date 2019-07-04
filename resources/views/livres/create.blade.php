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
                <select class="form-control"  name="Retailer" >
                    <option value="1">{{__('Retailer')}}</option>
                    @foreach($Retailers as $Retailer)
                    <option value="{{$Retailer->id + 1}}">{{ $Retailer->Title_Retailer }}</option>
                        @endforeach
                </select>
            </div>
            <div class=" card-body row">
                <select class="form-control"  name="Genre">
                    <option value="1">{{__('Genre')}}</option>
                    @foreach($Genrebooks as $Genrebook)
                    <option value="{{$Genrebook->id + 1}}">{{ $Genrebook->NameGenre }}</option>
                        @endforeach
                </select>
            </div>
            <script>



                function enabled_disabled_select(f) {
                    var name_select = (f.name  == 'NameGenre') ? "Genre" : "Retailer";
                    if($(f).val() != '' ) {
                        $('select[name= "' + name_select + '"]').prop('disabled', true);
                    }
                    else {
                        if (name_select == "Retailer")
                            if ($('input[name="Site"]').val() != '' || $('input[name="Title_Retailer"]').val() != '')
                                return;
                        $('select[name="' + name_select + '"]').prop('disabled', false);
                    }
                }

                $(function() {
                    $('select[name="Retailer"]').change(function(Retailer) {
                        // если значение не равно пустой строке
                        if($(this).val() != "1") {
                            $('input[name="Title_Retailer"]').val($(this).find('option:selected').text());
                            $('input[name="Site"]').val('...');
                            $('input[name="Title_Retailer"]').prop('disabled', true);
                            $('input[name="Site"]').prop('disabled', true);

                        } else {
                            $('input[name="Title_Retailer"]').prop('disabled', false);
                            $('input[name="Site"]').prop('disabled', false);
                        }
                    });


                    $('select[name="Genre"]').change(function() {
                        if($(this).val() != "1") {
                            $('input[name="NameGenre"]').val($(this).find('option:selected').text());
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
            <input class="form-control col" type="text" maxlength="150" required name="Title_Livre" placeholder={{__('Book')}}>
        </div>

        <div class="card-body row">
            <div class="input-group  col">
                <div class="input-group-prepend">
                    <span class="input-group-text">₽</span>
                </div>
                <input class="form-control" type="number" min="0" name="Price" required placeholder={{__('Price')}}>
            </div>
            <div class="col">
                <input class="form-control" type="number" min="0" name="Volume" required placeholder={{__('Pages')}}>
            </div>
            <div class="col">
                <input class="form-control " type="text" maxlength="50" name="NameGenre" required  onkeyup="enabled_disabled_select(this)" placeholder={{__('Genre')}}>
            </div>


        </div>

        <div class="card-header">
            {{__('Retailer')}}
        </div>

        <div class="card-body row" style="padding-bottom: 1px">
            <input class="form-control col" type="text" maxlength="76" name="Title_Retailer" required  onkeyup="enabled_disabled_select(this)" placeholder={{__('Title')}}>
            <input class="form-control col" type="text" maxlength="76" name="Site" required  onkeyup="enabled_disabled_select(this)" placeholder={{__('Site')}}>
        </div>

        <div class="card-body row justify-content-between" >
            <a class="btn btn-primary my-1 col-sm-2" href="{{ URL::previous() }}">{{ __('Back') }}</a>
            <input type="submit" class="btn btn-primary my-1 col-sm-2" value="{{__('Add')}}">
        </div>

    </form>
</div>

@endsection

