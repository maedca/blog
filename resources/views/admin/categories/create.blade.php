@extends('admin.template.main')
@section('title','Crear Categorias')
@section('content')
    {!! Form::open(['route'=>'admin.categories.store', 'method'=>'post']) !!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre de categoria', 'required']) !!}
        </div>
    <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}<a href="{{route('admin.categories.index')}}" class="btn btn-info">Regresar</a>

    </div>
    {!! Form::close() !!}
    @endsection