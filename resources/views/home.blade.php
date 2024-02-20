@extends('layout.layout')

@section('content')
    
        {{-- Contenitore sfondo --}}
    <div id="sfondo-img"></div>

        <div class="sfondo-nero text-light">
            <div class="container pt-5">
                <div class="row">
                    {{-- Contenuto  --}}
                        @foreach ($comics as $comic)
                        <div class="col-2 my-4">
                            <a href="{{ route('comics.show', ['id' => $comic->id]) }}">
                                <div class="text-center effetto-hover">
                                    <img src="{{ $comic->thumb }}" class="card-main" alt="{{ $comic->title }}">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                </div>
                            </a>
                        </div>  
                        @endforeach

                    {{-- Bottone --}}
                    <div class="col-12 text-center">
                        <a href="{{ route('comics.create') }}">
                            <button type="button" class="btn load-more mb-4 px-5 ">Aggiungi altri</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

</body>
@endsection