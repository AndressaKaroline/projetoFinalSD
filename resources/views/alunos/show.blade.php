@extends('adminlte::page')

@section('content_header')
<h1>ALUNOS</h1>
<ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="/admin/cadastros">Cadastros</a></li>
    <li class="active">Alunos</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <legend>Alunos</legend>
        <a href="{{ route('cadastrarAlunos')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Cadastrar Aluno</i></a>
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
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                </tr>
                <!-- <tr>
                    <td colspan="99" class="text-center">Nenhum aluno encontrado</td>
                </tr> -->
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#alunoModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Maria</td>
                    <td>19</td>
                    <td>Rua: X</td>
                    <td>(42) 99164-2464</td>
                </tr>
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#alunoModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Franscisco Pereira</td>
                    <td>29</td>
                    <td>Rua: ABC</td>
                    <td>(42) 99934-2578</td>
                </tr>
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#alunoModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Laressa Dogado</td>
                    <td>18</td>
                    <td>Rua: Augusto Mierjam</td>
                    <td>(42) 99923-2314</td>
                </tr>
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#alunoModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Pedro Mierjam</td>
                    <td>15</td>
                    <td>Rua: Augusto Mierjam</td>
                    <td>(42) 99934-2344</td>
                </tr>
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#alunoModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Paulo Augusto Mierjam Filho</td>
                    <td>20</td>
                    <td>Rua: Augusto Mierjam</td>
                    <td>(42) 99923-2314</td>
                </tr>
                <tr>
                    <td class="list-action">
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        <button data-toggle="modal" data-target="#alunoModal" onclick="" type="button" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></button>
                    </td>
                    <td>Andressa Dogado</td>
                    <td>21</td>
                    <td>Rua: Augusto Mierjam</td>
                    <td>(42) 99986-8556</td>
                </tr>

                @include('alunos.visualizar')

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
