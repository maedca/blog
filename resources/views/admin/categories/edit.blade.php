@extends('admin.template.main')
@section('title','Editar Categoria')
@section('content')
    {!! Form::open(['route'=>['admin.categories.update', $category], 'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$category->name, ['class'=>'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}<a href="{{route('admin.categories.index')}}" class="btn btn-info">Regresar</a>

    </div>
    {!! Form::close() !!}
    @endsection