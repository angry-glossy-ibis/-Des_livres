@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="card row">
                <div class="card-header">{{__('Library')}}</div>
                @if (session('status'))
                    <div class="alert alert-success row" role="alert">
                        {{ session('status') }}
                    </div>
                @endif



                <div class="card-body  row justify-content-end">
                    <a  class="btn btn-primary my-1 col-sm-2" href="{{ route('livres.create') }}">{{__('Add')}}</a>
                    <button type="submit" class="btn btn-primary my-1 col-sm-2">{{__('Edit')}}</button>
                    <button type="submit" class="btn btn-primary my-1 col-sm-2">{{__('Delete')}}</button>
                </div>

                    <table class="table table-bordered ">
                        <thead  align="center" >
                        <tr>
                            <th scope="col" rowspan="2">{{__('Select')}}</th>
                            <th scope="col" rowspan="2">#</th>
                            <th scope="col" colspan="4">{{__('Book')}}</th>
                            <th scope="col" colspan="2">{{__('Retailer')}}</th>
                            <th scope="col" rowspan="2">{{__('Price')}}</th>
                            <th scope="col" rowspan="2">{{__('Condition')}}</th>
                            <th scope="col" rowspan="2">{{__('Date add')}}</th>
                            <th scope="col" rowspan="2">{{__('Date Reminder')}}</th>
                        </tr>
                        <tr>
                            <th scope="col">{{__('Image')}}</th>
                            <th scope="col">{{__('Book')}}</th>
                            <th scope="col">{{__('Pages')}}</th>
                            <th scope="col">{{__('Genre')}}</th>
                            <th scope="col">{{__('Title')}}</th>
                            <th scope="col">{{__('Site')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                    @foreach($entries as $entry)--}}

                        {{--                        @endforeach--}}
                        <tr class="table-secondary">
                            <td align="center"><div class="form-check ">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                                </div></td>
                            <th scope="row">1</th>
                            <th></th>
                            <td>Мир без магии</td>
                            <td>300</td>
                            <td>ЛитРпг</td>
                            <td>Автор тудей</td>
                            <td> <a href="https://author.today/">https://author.today/</a></td>
                            <td>150</td>
                            <td align="center"><div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                </div></td>
                            <td>16.06.2019</td>
                            <td><div class="form-group">
                                    <input type="date" class="form-control">
                                </div></td>
                        </tr>
                        <tr class="table-success">
                            <td align="center"><div class="form-check ">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                                </div></td>
                            <th scope="row">1</th>
                            <th></th>
                            <td>Мир без магии</td>
                            <td>300</td>
                            <td>ЛитРпг</td>
                            <td>Автор тудей</td>
                            <td> <a href="https://author.today/">https://author.today/</a></td>
                            <td>150</td>
                            <td align="center"><div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                </div></td>
                            <td>16.06.2019</td>
                            <td><div class="form-group">
                                    <input type="date" class="form-control">
                                </div></td>
                        </tr>
                        </tbody>
                    </table>


            </div>

        </div>

@endsection
