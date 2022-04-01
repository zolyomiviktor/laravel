@extends( "layouts.master" )

@section( "title", "Szerkesztés" )
@section( "content" )

@if( $errors->any() )
    <ul>
        @foreach( $errors->all() as $error )
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif


<form action="/update-perfume" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $perfume->id }}">
    <p>
        <label for="">Név</label>
        <input type="text" name="name" value="{{ $perfume->name }}">
        <br>
        @error( "name" )
            <span>{{ "A mező vagy mezők üresek" }}</span>
        @enderror
    </p>
    <p>
        <label for="">Típus</label>
        <input type="text" name="type" value="{{ $perfume->type }}">
        <br>
        @error( "type" )
            <span>{{ "A mező üres" }}</span>
        @enderror
    </p>
    <p>
        <label for="">Ár</label>
        <input type="text" name="price" value="{{ $perfume->price }}">
        @error( "price" )
            <span>{{ "A mező üres" }}</span>
        @enderror
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>
@endsection