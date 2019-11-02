@extends('adminlte::page')

@section('content_header')
<h1>CADASTRO</h1>
<ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="/admin/cadastro">Cadastros</a></li>
    <li><a href="/admin/cadastro/alunos">Alunos</a></li>
    <li class="active">Criar</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <legend>Alunos</legend>
        <a href="{{ route('alunos')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"> Voltar</i></a>
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

        <form action="#" class="form-horizontal" method="post">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
                <label class="control-label col-sm-3" for="nome">Nome Completo: *</label>
                <div class="col-sm-7">
                    <input type="text" id="nome" name="nome" value="{{ old('nome') }}" class="form-control" placeholder="Nome">
                    @if ($errors->has('nome'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nome') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="dataNascimento">Data de Nascimento: *</label>
                <div class="col-sm-3">
                    <input type="date" id="dataNascimento" name="dataNascimento" class="form-control">
                </div>
                <label class="control-label col-sm-1" for="idade">Idade: *</label>
                <div class="col-sm-3">
                    <input id="idade" name="idade" class="form-control" placeholder="Idade">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="rg">RG: *</label>
                <div class="col-sm-3">
                    <input id="rg" name="rg" class="form-control" placeholder="RG">
                </div>
                <label class="control-label col-sm-1" for="cpf">CPF: *</label>
                <div class="col-sm-3">
                    <input id="cpf" name="cpf" class="form-control cpf-mask" placeholder="CPF">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="address">Endereço: *</label>
                <div class="col-sm-7">
                    <input id="address" name="address" class="form-control" placeholder="Endereço" onkeyup=upperCase(this)>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="country">Município: *</label>
                <div class="col-sm-7">
                    <input id="country" name="country" class="form-control" placeholder="Município">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="telephone">Telefone: *</label>
                <div class="col-sm-7">
                    <input id="telephone" name="telephone" class="form-control" placeholder="Telefone">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="plano">Plano: *</label>
                <div class="col-sm-7">
                    <select id="plano" name="plano" class="form-control">
                        <option value="#">Selecione um plano</option>
                        <option value="0">Plano Bronze - R$ 80,00</option>
                        <option value="1">Plano Prata - R$ 150,00</option>
                        <option value="2">Plano Ouro - R$ 200,00</option>
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <br>
                <p class="col-sm-5">* Campos obrigatorios</p>
                <button type="submit" class="btn btn-success">Salvar Aluno</button>
            </div>
        </form>
    </div>
</div>
@stop
