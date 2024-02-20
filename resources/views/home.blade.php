@extends('layout.layout')

@section('content')
    
        {{-- Contenitore sfondo --}}
    <div id="sfondo-img"></div>

        <div class="sfondo-nero text-light">
            <div class="container pt-5">
                <div class="row">
                    {{-- Contenuto  --}}
                    {{-- @foreach ($comics as $comic)
                    <div class="col-2 my-4">
                        <a href="{{ route('dettaglio_fumetto', ['param' => $db['id']]) }}">
                            <div class="text-center effetto-hover">
                                <img src="{{$db['thumb']}}" class="card-main" alt="{{$db['title']}}">
                                  <h5 class="card-title">{{$db['title']}}</h5>
                            </div>
                        </a>
                    </div>  
                    @endforeach --}}

                    {{-- Bottone --}}
                    <div class="col-12 text-center">
                        <button type="button" class="btn load-more mb-4 px-5 ">LOAD MORE</button>
                    </div>
                </div>
            </div>
        </div>

</body>
@endsection