@extends('layouts.padrao')

@section('titulo', 'Lista de produtos')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            @if (count($produtos) == 0)
                <h3 class="title">Nenhum produto adicionado</h3>
            @else
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <th scope="col">
                            {{ $produto->codpro }}
                        </th>
                        <th scope="col">
                            {{ $produto->nompro }}
                        </th>
                        <th scope="col">
                            {{ $produto->estpro }}
                        </th>
                        <th scole="col">
                            <form method="post" 
                            action="{{ route('elimar-produto') }}">
                            @csrf
                            <input type="hidden" name="codpro" value="{{ $produto->codpro }}"/>
                            <button class="btn btn-primary">Deletar</button>
                            </form>
                        </th>
                    </tr>
                @endforeach 
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.jogoDaVelha')