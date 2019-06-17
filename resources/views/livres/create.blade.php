@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('livres.store')}}" method="POST">
    <div class="card-body row">

        <div class="form-group col">
            <input type="file" accept="image/*" class="form-control-file" id="exampleFormControlFile1" name="">
        </div>




        <select class="form-control col">
            <option>{{__('Retailer')}}</option>
        </select>

        <select class="form-control col">
            <option>{{__('Genre')}}</option>
        </select>
    </div>


        <div class="card-body row">
            {{ Form::text('email', '' , array('class' => 'form-control col', 'placeholder'))}}
        </div>


        <div class="form-group col">
            <input type="submit">
        </div>

    <div class="card-body row">
        <input class="form-control col" type="text" placeholder={{__('Book')}}>
    </div>

    <div class="card-body row">
        <input class="form-control col" type="number" placeholder={{__('Price')}}>
        <input class="form-control col" type="number" placeholder={{__('Pages')}}>
        <input class="form-control col" type="text" placeholder={{__('Genre')}}>
    </div>

    <div class="card-header">{{__('Retailer')}}</div>

    <div class="card-body row">

        <input class="form-control col" type="text" placeholder={{__('Title')}}>
        <input class="form-control col" type="text" placeholder={{__('Site')}}>
    </div>


    </form>
</div>

@endsection

