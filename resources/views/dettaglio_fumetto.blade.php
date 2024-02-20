@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}" class="img-fumetto">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div >
                    <div class="">
                        <h1>{{$fumetto['title']}}</h1>
                    </div>
                    <h5><strong>SERIE: </strong>{{$fumetto['series']}}</h5>
                    <h5><strong>DATA: </strong>{{$fumetto['sale_date']}}</h5>
                    <h5><strong>PREZZO: </strong>{{$fumetto['price']}}</h5>
                    <P>{{$fumetto['description']}}</P>
                </div>
            </div>
        </div>
    </div>
@endsection