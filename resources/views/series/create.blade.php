@extends('layout')
@section('cabecalho')
Formulário
@endsection
@section('conteudo')
@if ($errors->any())
    <div class="col-12">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
<div class="col">
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Escreva o nome" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>
@endsection
    
           

