@extends('layouts.padrao')

@section('titulo', 'Adicionar de produtos')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <form class="form-group" action="{{route('salvar-produto')}}" method="post">
            @csrf
            <input name="nompro" class="form-control" type="text" placeholder="Nome do produto"/>
                <br>
                <input type="hidden" value="{{$produto->codpro}}" name="codpro" id="codpro"/>
            <input  name="estpro" class="form-control" type="number" value="{{$produto->estpro}"  min="0" placeholder="Quantidade"/>
                <br>
                <button id="add" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@endsection

@extends('layouts.jogoDaVelha')