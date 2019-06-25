@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="card">
                <div class="card-header " style="padding-bottom: 10px;margin-bottom: 35px">
                    <div class="row justify-content-between" >
                        <h4>{{__('Library')}}</h4>
                        <a class="btn btn-primary " href="{{ route('home.create') }}" style="  padding-right: 25px; padding-left: 25px; margin-right: 5px">{{__('Add')}}</a>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success row" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-deck " style="margin-left: 1.6%; margin-right: 1%" >
                    @foreach ($Sources as $Source)
                        <div class="col-md-4 mb-auto">
                            <div class="card  bg-light mb-3" style="max-width: 18rem; ">
                                {{--                    Есть ли картинка , то ставим её, если нет, то ставим дефолтную--}}
                                <div class="fileinput-preview img-thumbnail card-header" data-trigger="fileinput" style="width: 290px; height: 150px;">
                                    <div style="position: absolute;">
                                        <img data-src="{{asset('/storage/images/book_bw_cmyk-800x400-300x150.png')}}"  alt="...">
                                    </div>
                                    <div  style="position: absolute; margin-left: 67%">
                                        <a  href="#" class=""><i class="fas fa-check"></i></a>
                                        <a  href="#" class=""><i class="fas fa-ban" ></i></a>
                                        <a href="{{route('home.edit', $Source)}}" class=""><i class="far fa-edit" ></i></a>
                                        <a href="{{route('home.update', $Source)}}" class=""><i class="fas fa-trash-alt" ></i></a>


                                    </div>
                                </div>
                                <div class="card-body ">
                                    <h5 class="card-title">{{$Source->livre->Title_Livre}}</h5>
                                    <p class="card-text" style="margin-bottom: 5px">Жанр: {{$Source->livre->genrebook->NameGenre}}, страниц: {{$Source->livre->Volume}}</p>
                                    <p class="card-text" style="margin-bottom: 5px">Дата добавления: {{ $Source->created_at->format('d-m-Y') }}</p>
                                    {{--                        Если уведомление имеется, то выводим, если нет, то 'Уведомление не назначено'--}}
                                    <p class="card-text">Дата уведомления: {{ $Source->Date_Reminder = 'null' ? 'не назначено' : $Source->Date_Reminder }}</p>
                                </div>

                                <table class="card-footer" style="font-size: 16px; " >
                                    @foreach ( $Source->livre->sentence as $sentence)
                                    <tr>
                                        <td align="left">
                                            <a class="" href="{{$sentence->retailer->Site}}" style="padding-left: 4px">{{$sentence->retailer->Title_Retailer}}</a>
                                        </td>
                                        <td align="right" style="padding-right: 5px">Цена: {{$sentence->Price}}руб</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

@endsection
