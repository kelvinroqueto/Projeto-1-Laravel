@extends('templates.master')
@section('conteudo-view')
@if(session('success'))
<h3>{{session('success')['messages']}}</h3>
@endif
{!! Form::model($user,['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-padrao']) !!}
@include ('user.form-fields')
@include ('templates.formularios.submit', ['input' => 'Atualizar'])
{!! Form::close() !!}
@endsection

