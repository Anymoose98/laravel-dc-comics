@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="img-comic">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div >
                    <div class="">
                        <h1>{{$comic['title']}}</h1>
                    </div>
                    <h5><strong>SERIE: </strong>{{$comic['series']}}</h5>
                    <h5><strong>DATA: </strong>{{$comic['sale_date']}}</h5>
                    <h5><strong>PREZZO: </strong>{{$comic['price']}}</h5>
                    <P>{{$comic['description']}}</P>
                </div>
            </div>
        </div>
    </div>
@endsection