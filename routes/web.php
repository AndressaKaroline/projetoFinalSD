<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/cadastro/alunos', 'AlunoController@index')->name('alunos');
Route::get('/admin/cadastro/alunos/criar', 'AlunoController@cadastrar')->name('cadastrarAlunos');
Route::get('/admin/cadastro/personais', 'PersonaisController@index')->name('personais');
Route::get('/admin/cadastro/personais/criar', 'PersonaisController@cadastrar')->name('cadastrarPersonais');
Route::get('/admin/cadastro/planos', 'PlanosController@index')->name('planos');
Route::get('/admin/cadastro/planos/criar', 'PlanosController@cadastrar')->name('cadastrarPlanos');
Route::get('/admin/cadastro/exercicios', 'ExerciciosController@index')->name('exercicios');
Route::get('/admin/cadastro/exercicios/criar', 'ExerciciosController@cadastrar')->name('cadastrarExercicios');
Route::get('/admin/avaliacaoFisica', 'AvaliacaoController@index')->name('avaliacaoFisica');
Route::get('/admin/avaliacaoFisica/criar', 'AvaliacaoController@novaAvaliacao')->name('novaAvaliacao');
