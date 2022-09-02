<!-- create.blade.php -->

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Adicionar novo produto
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('products.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Nome do produto:</label>
                    <input type="text" class="form-control" name="name" required/>
                </div>
                <div class="form-group">
                    <label for="price">Preço :</label>
                    <input type="text" class="form-control" name="price" required/>
                </div>
                <div class="form-group">
                    <label for="category">Category :</label>
                    <input type="text" class="form-control" name="category" required/>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar produto</button>
            </form>
        </div>
    </div>
@endsection
