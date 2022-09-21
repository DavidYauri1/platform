@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vt</h1>
@stop

@section('content')
<div class="card">

    <div class="card-header">
            <a href="{{ route('admin.areas.create') }}">Crear Area</a>
    </div>


    <div class="card-body"> 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @forelse ($areas as $area )
                    <tr>
                        <td>
                            {{ $area->id }}
                        </td>
                        <td>
                            {{ $area->name }}
                        </td>

                        <td width="10px">
                            <a class="btn btn-secondary" href="{{ route('admin.areas.edit',$area) }}">Editar</a>
                        </td>

                        <td width="10px">
                            <form action="{{route('admin.areas.destroy',$area)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty

                <tr>
                    <td colspan="4">
                        No hay ningun  rol registrado
                    </td>
                </tr>
                    
                @endforelse


            </tbody>

        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop