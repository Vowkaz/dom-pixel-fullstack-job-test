<!-- index.blade.php -->

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Categoria</td>
                <td>Data de Criaçao</td>
                <td colspan="2">Ação</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->created_at->format('d/m/Y - h:i:s')}}</td>
                    <td><a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <div class="card">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Adicionar produto</a>
            </div>
        <div>
@endsection
