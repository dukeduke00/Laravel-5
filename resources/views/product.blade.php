@extends("layout")

@section("nazivStranice")
    Svi proizvodi
@endsection

@section("sadrzajStranice")
    @foreach($allProducts as $product)
        Proizvod: {{$product->name}}
        <br>
        Opis: {{$product->description}}
        <br>
        Kolicina: {{$product->amount}}
        <br>
        Cijena: {{$product->price}}
        <br><br>
    @endforeach
@endsection
