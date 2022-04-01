@extends( "layouts.master" )
@section( "title", " Új termék" )
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

<form action="add-perfume" method="post">
    @csrf
    <p>
        <label for="">Név</label>
        <input type="text" name="name"><br>
      
    </p>
    <p>
        <label for="">Típus</label>
        <input type="text" name="type">
    </p>
    <p>
        <label for="">Ár</label>
        <input type="text" name="price">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>
@endsection