@extends('admin.template.main')
@section('title', 'Login')
@section('content')
    {!! Form::open(['route'=>'admin.auth.login', 'method'=> 'post']) !!}
    <div class="form-group">
    {!! Form::label('email', 'Correo Electronico') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}<a href="{{route('admin.categories.index')}}" class="btn btn-info">Regresar</a>

    </div>
    {!! Form::close() !!}
    @endsection