@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Catalogo Prodotti</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Aggiungi Prodotto</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Prezzo</th>
                <th>Immagine</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>€{{ number_format($product->price, 2) }}</td>
                <td>
                    @if($product->image)
                        @if(filter_var($product->image, FILTER_VALIDATE_URL))
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 150px;">
                        @else
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 150px;">
                        @endif
                    @else
                        <img src="{{ asset('storage/assets/no-image.jpg') }}" alt="No Image" class="img-thumbnail" style="max-width: 150px;">
                    @endif
                </td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info">Modifica</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sei sicuro?')">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection