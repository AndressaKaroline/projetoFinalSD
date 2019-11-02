@extends('adminlte::page')

@section('content_header')
<h1>PLANOS</h1>
<ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="/admin/cadastros">Cadastros</a></li>
    <li class="active">Planos</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <legend>Planos</legend>
        <a href="{{ route('cadastrarPlanos')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Cadastrar Plano</i></a>
    </div>
    <div class="box-body">
        @if(session('sucess'))
        <p class="alert alert-success">
            {{ session('sucess') }}
        </p>
        @endif
        @if(session('error'))
        <p class="alert alert-error">
            {{ session('error') }}
        </p>
        @endif

        <div class="col-sm-12 div-table">
            <table class="table table-bordered col-sm-10">
                <tr>
                    <th>Ações</th>
                    <th>Titulo</th>
                    <th>Valor</th>
                </tr>
                <!-- <tr>
                    <td colspan="99" class="text-center">Nenhum aluno encontrado</td>
                </tr> -->
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#planosModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Plano Prata</td>
                    <td>R$ 80,00</td>
                </tr>
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#planosModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Plano Bronze</td>
                    <td>R$ 150,00</td>
                </tr>
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#planosModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Plano Ouro</td>
                    <td>R$ 200,00</td>
                </tr>

                @include('planos.visualizar')

                <!------------------------------------->
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
td {
    text-align: center;
}

th {
    text-align: center;
}

.list-action{
text-align: center;
}
</style>
@stop
