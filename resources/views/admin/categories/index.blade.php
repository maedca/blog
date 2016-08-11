@extends('admin.template.main')
@section('title','Categorias')
@section('content');
<a href="{{route('admin.categories.create')}}" class="btn btn-info">Registrar Categoria</a>
<hr>
    <table class="table table-striped ">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($categories as $category)
                <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td><a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-info" ><span class="glyphicon glyphicon-wrench"></span></a>
                    <a href="{{route('admin.categories.destroy', $category->id)}}" class="btn btn-danger" onclick="return confirm('esta seguro de elimar la categoria')"><span class="glyphicon glyphicon-remove-circle" ></span></a></td>
                </tr>
                @endforeach

        </tr>
        </tbody>
    </table>
    <div class="text-center">
        {!! $categories->render() !!}
    </div>
    @endsection