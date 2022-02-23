@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Despesas</h1>   
</div>
<div class="row">
    <div class="col-md-12">
        <a href="{{ url('/Restrito/despesas/create') }}" class="btn btn-success">Novo</a>  
        @if(session()->get('success'))
        <div class="alert alert-success mt-1">
            {{ session()->get('success') }}  
        </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">#</th>
                    <th class="col-md-7">Descrição</th>
                    <th class="col-md-2">Valor</th>
                    <th class="col-md-2">Ações</th>
                </tr>            
            </thead>
            <tbody> 
                @foreach($despesas as $despesa)                              
                <tr>
                    <td class="col-md-1">{{$despesa->id}}</td>
                    <td class="col-md-7">{{$despesa->descricao}}</td>
                    <td class="col-md-2">- R${{$despesa->valor}}</td>
                    <td class="col-md-2">
                        <a href="{{ route('despesas.edit', $despesa->id) }}" class="btn btn-primary mb-1">
                            <span data-feather="edit"></span>
                        </a>                
                        <form action="{{ route('despesas.destroy', $despesa->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection