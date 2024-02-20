@extends('layout.layout')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('users.store')}}" method="POST">
                @csrf
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title"  placeholder="Titolo">
                
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" name="description"  placeholder="Descrizione">

                <label for="thumb" class="form-label">Foto copertina</label>
                <input type="text" class="form-control" name="thumb"  placeholder="Foto copertina">

                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price"  placeholder="Prezzo">

                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series"  placeholder="Serie">

                <label for="sala_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" name="sala_date"  placeholder="Data di uscita">

                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type"  placeholder="Tipo">

            </form>
        </div>
    </div>
</div>
@endsection
  