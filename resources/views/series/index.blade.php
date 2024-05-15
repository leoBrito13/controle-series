
@extends('layout')
@section('cabecalho')
Séries
@endsection
@section('conteudo')
<div class="col">
    @if(!empty($mensagem))
    <div class="alert alert-success" role="alert">
        {{$mensagem}}
    </div>
    @endif
    <a href="{{route('form_criar_serie')}}" class="btn btn-dark mb-3">Adicionar</a>
    <ul class="list-group">
         @foreach ($series as $serie) 
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$serie->nome}}
                <form action="/series/{{$serie->id}}" method="POST" onsubmit="return confirm('Term certeza que deseja remover?')">
                    @csrf
                    @method("DELETE") 
                    <button  class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </li>
         @endforeach
    </ul>
</div>
@endsection
        
        
