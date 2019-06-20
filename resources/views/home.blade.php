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
                    <div class="col-md-4 mb-auto"  >
                        <div class="card  bg-light mb-3" style="max-width: 18rem; ">
                            {{--                    Есть ли картинка , то ставим её, если нет, то ставим дефолтную--}}
                            <div class="fileinput-preview img-thumbnail card-header" data-trigger="fileinput" style="width: 290px; height: 150px;">
                                <div style="position: absolute;">
                                    <img data-src="{{asset('/storage/images/book_bw_cmyk-800x400-300x150.png')}}"  alt="...">
                                </div>
                                <div style="position: absolute; margin-left: 67%">
                                    <a  href="#"><i class="fas fa-check"></i></a>
                                    <a  href="#" class=""><i class="fas fa-ban" ></i></a>
                                    <a  href="#"><i class="far fa-edit"></i></a>
                                    <a  href="#" class=""><i class="fas fa-trash-alt" ></i></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">Мир без магии</h5>
                                <p class="card-text" style="margin-bottom: 5px">Жанр: ЛитРпг, страниц: 300</p>
                                <p class="card-text" style="margin-bottom: 5px">Дата добавления: 18.06.2019</p>
                                {{--                        Если уведомление имеется, то выводим, если нет, то 'Уведомление не назначено'--}}
                                <p class="card-text">Дата уведомления: не назначена</p>
                            </div>
                            <table class="card-footer" style="font-size: 16px; " >
                                <tr>
                                    <td align="left">
                                        <a class="" href="https://author.today/" style="padding-left: 4px">Author.Today</a>
                                    </td>
                                    <td align="right" style="padding-right: 5px">Цена: 150руб</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div class="col-md-4 mb-auto">
                        <div class="card  bg-light mb-3" style="max-width: 18rem; ">
                            {{--                    Есть ли картинка , то ставим её, если нет, то ставим дефолтную--}}
                            <div class="fileinput-preview img-thumbnail card-header" data-trigger="fileinput" style="width: 290px; height: 150px;">
                                <div style="position: absolute;">
                                    <img data-src="{{asset('/storage/images/book_bw_cmyk-800x400-300x150.png')}}"  alt="...">
                                </div>
                                <div style="position: absolute; margin-left: 67%">
                                    <a  href="#"><i class="fas fa-check"></i></a>
                                    <a  href="#" class=""><i class="fas fa-ban" ></i></a>
                                    <a  href="#"><i class="far fa-edit"></i></a>
                                    <a  href="#" class=""><i class="fas fa-trash-alt" ></i></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">Мир без магии</h5>
                                <p class="card-text" style="margin-bottom: 5px">Жанр: ЛитРпг, страниц: 300</p>
                                <p class="card-text" style="margin-bottom: 5px">Дата добавления: 18.06.2019</p>
                                {{--                        Если уведомление имеется, то выводим, если нет, то 'Уведомление не назначено'--}}
                                <p class="card-text">Дата уведомления: не назначена</p>
                            </div>
                            <table class="card-footer" style="font-size: 16px; " >
                                <tr>
                                    <td align="left">
                                        <a class="" href="https://author.today/" style="padding-left: 4px">Author.Today</a>
                                    </td>
                                    <td align="right" style="padding-right: 5px">Цена: 150руб</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div class="col-md-4 mb-auto">
                        <div class="card  bg-light mb-3" style="max-width: 18rem; ">
                            {{--                    Есть ли картинка , то ставим её, если нет, то ставим дефолтную--}}
                            <div class="fileinput-preview img-thumbnail card-header" data-trigger="fileinput" style="width: 290px; height: 150px;">
                                <div style="position: absolute;">
                                    <img data-src="{{asset('/storage/images/book_bw_cmyk-800x400-300x150.png')}}"  alt="...">
                                </div>
                                <div style="position: absolute; margin-left: 67%">
                                    <a  href="#"><i class="fas fa-check"></i></a>
                                    <a  href="#" class=""><i class="fas fa-ban" ></i></a>
                                    <a  href="#"><i class="far fa-edit"></i></a>
                                    <a  href="#" class=""><i class="fas fa-trash-alt" ></i></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">Мир без магии</h5>
                                <p class="card-text" style="margin-bottom: 5px">Жанр: ЛитРпг, страниц: 300</p>
                                <p class="card-text" style="margin-bottom: 5px">Дата добавления: 18.06.2019</p>
                                {{--                        Если уведомление имеется, то выводим, если нет, то 'Уведомление не назначено'--}}
                                <p class="card-text">Дата уведомления: не назначена</p>
                            </div>
                            <table class="card-footer" style="font-size: 16px; " >
                                <tr>
                                    <td align="left">
                                        <a class="" href="https://author.today/" style="padding-left: 4px">Author.Today</a>
                                    </td>
                                    <td align="right" style="padding-right: 5px">Цена: 150руб</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                    <div class="col-md-4 mb-auto">
                        <div class="card  bg-light mb-3" style="max-width: 18rem; ">
                            {{--                    Есть ли картинка , то ставим её, если нет, то ставим дефолтную--}}
                            <div class="fileinput-preview img-thumbnail card-header" data-trigger="fileinput" style="width: 290px; height: 150px;">
                                <div style="position: absolute;">
                                    <img data-src="{{asset('/storage/images/book_bw_cmyk-800x400-300x150.png')}}"  alt="...">
                                </div>
                                <div style="position: absolute; margin-left: 67%">
                                    <a  href="#"><i class="fas fa-check"></i></a>
                                    <a  href="#" class=""><i class="fas fa-ban" ></i></a>
                                    <a  href="#"><i class="far fa-edit"></i></a>
                                    <a  href="#" class=""><i class="fas fa-trash-alt" ></i></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title">Мир без магии</h5>
                                <p class="card-text" style="margin-bottom: 5px">Жанр: ЛитРпг, страниц: 300</p>
                                <p class="card-text" style="margin-bottom: 5px">Дата добавления: 18.06.2019</p>
                                {{--                        Если уведомление имеется, то выводим, если нет, то 'Уведомление не назначено'--}}
                                <p class="card-text">Дата уведомления: не назначена</p>
                            </div>
                            <table class="card-footer" style="font-size: 16px; " >
                                <tr>
                                    <td align="left">
                                        <a class="" href="https://author.today/" style="padding-left: 4px">Author.Today</a>
                                    </td>
                                    <td align="right" style="padding-right: 5px">Цена: 150руб</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
