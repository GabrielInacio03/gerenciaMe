@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cartões</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>    
</div>
<div class="row">
    <div class="col-md-12">
        <a href="{{ url('/Restrito/cartaos/create') }}" class="btn btn-success">Novo</a>
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>  
            <tbody>
            @foreach($cartaos as $cartao)
                <tr>
                    <td>{{$cartao->id}}</td>
                    <td>{{$cartao->nome}}</td>                    
                    <td>
                        <a href="{{ route('cartaos.edit', $cartao->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('cartaos.destroy', $cartao->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
            </tbody>      
        </table>
    </div>
</div>
@endsection