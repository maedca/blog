
@extends('admin.template.main');

@section('content');
{!! Form::open(['route' => 'articles.store', 'method' => 'POST']) !!}
<div class="form-group">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('content', 'Cuerpo') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control',  'placeholder' => 'Cuerpo del Articulo']) !!}
</div>
<div class="form-group">
    {!! Form::label('category', 'Categoria') !!}
    {!! Form::select('category', $category, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categoria', 'required']) !!}
</div>
{{--<div class="form-group">
    {!! Form::label('imagenes', 'Seleccione las imagenes') !!}
    {!! Form::file('imagenes[]', ['required', 'multiple']) !!}
</div>--}}
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}

</div>
{!! Form::close() !!}
    @endsection;