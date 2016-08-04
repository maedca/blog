@extends('admin.template.main')
@section('title', 'Editar usuario '.$user->name)
@section('content')
    {!! Form::open(['route'=>['admin.users.update',$user],'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Ingrese el Nombre','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Correo Electronico') !!}
        {!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'me@me.com','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password',['class'=>'form-control','type'=>'password','placeholder'=>'password','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type',['member'=>'Miembro','admin'=>'administrador'],['class'=>'form-control','required', 'selected'=>$user->type]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}<a href="{{route('admin.users.index')}}" class="btn btn-info">Regresar</a>

    </div>
    {!! Form::close() !!}
    @endsection