@extends('admin.template.main')
@section('title', 'Listado de usuarios')
@section('content')
    <a href="{{route('admin.users.create')}}"class="btn btn-info">Registrar Usuario</a>

    <hr>
    <table class="table table-striped">
        <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Accion</th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                @if($user->type == 'member')
                        <span class="label label-primary">{{$user->type}}</span>
                    @else
                        <span class="label label-success">{{$user->type}}</span>
                    @endif
                </td>
            <td><a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-wrench"></span></a>   <a href="{{route('admin.users.destroy', $user->id)}}" onclick="confirm('seguro de eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->render() !!}
   @endsection