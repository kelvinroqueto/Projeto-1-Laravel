@extends('templates.master')

@section('conteudo-view')
@if(session('success'))
<h3>{{session('success')['messages']}}</h3>
@endif
{!! Form::model($institution,['route' => ['institution.update', $institution->id], 'method' => 'put', 'class' => 'form-padrao']) !!}
@include ('templates.formularios.input',['label' => 'Nome', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
@include ('templates.formularios.submit', ['input' => 'Atualizar'])
{!! Form::close() !!}
@endsection