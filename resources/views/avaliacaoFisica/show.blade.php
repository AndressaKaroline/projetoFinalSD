@extends('adminlte::page')

@section('content_header')
<h1>AVALIAÇÃO FÍSICA</h1>
<ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li class="active">Avaliação Física</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <legend>Avaliação Física</legend>
        <a href="{{ route('novaAvaliacao')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Nova Avaliação</i></a>
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
                    <th>Data</th>
                    <th>Aluno</th>
                    <th>Personal</th>
                </tr>
                <!-- <tr>
                    <td colspan="99" class="text-center">Nenhum aluno encontrado</td>
                </tr> -->
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#avaliacaoFisicaModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>24/10/2018</td>
                    <td>Pedro Mierjam</td>
                    <td>Moíses</td>
                </tr>
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#avaliacaoFisicaModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>19/11/2018</td>
                    <td>Maria</td>
                    <td>Moíses</td>
                </tr>

                @include('exercicios.visualizar')

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
