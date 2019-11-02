@extends('adminlte::page')

@section('content_header')
<h1>CADASTRO</h1>
<ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="/admin/cadastro">Cadastros</a></li>
    <li><a href="/admin/cadastro/exercicios">Exercicios</a></li>
    <li class="active">Criar</a></li>
</ol>
@stop

@section('content')
<div class="box">
    <div class="box-header">
        <legend>Exercicios</legend>
        <a href="{{ route('exercicios')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"> Voltar</i></a>
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
                <label class="control-label col-sm-3" for="nome">Nome: *</label>
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
                <label class="control-label col-sm-3" for="plano">Grupo Muscular: *</label>
                <div class="col-sm-7">
                    <select id="plano" name="plano" class="form-control">
                        <option value="#">Selecione um grupo</option>
                        <option value="0">Perna</option>
                        <option value="1">Ombro</option>
                        <option value="2">Tríceps</option>
                        <option value="">Bíceps</option>
                        <option value="">Peito</option>
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <br>
                <p class="col-sm-5">* Campos obrigatorios</p>
                <button type="submit" class="btn btn-success">Salvar Exercício</button>
            </div>
        </form>
    </div>
</div>
@stop
