@extends('layouts.app')

@section('content')
<div class="container">



    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Mis Notas') }}

                    @if (Auth::user()->department->id == \App\Models\Department::DEPT_ATC)
                        <a href="{{ route('notes.create') }}" class="btn btn-primary">Crear Nota</a>
                    @endif
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Empleado</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Empresa</th>
                                <th scope="col">Teléfono contacto</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Descripción</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $item)
                            
                            @php
                            $cssClass = '';
                            if ($item->deleted_at) {
                            $cssClass = 'bg-danger';
                            } elseif ($item->status == 'pending') {
                            $cssClass = 'bg-primary';
                            } elseif ($item->status == 'process') {
                            $cssClass = 'bg-warning';
                            } elseif ($item->status == 'finish') {
                            $cssClass = 'bg-success';
                            }
                            @endphp

                            <tr>
                                <th class="{{ $cssClass }}" scope="row">
                                    {{ $item->id }} @if($item->reactivated_at) <i class="fa fa-edit"></i> @endif
                                </th>
                                <td  class="{{ $cssClass }}"  >{{ $item->user->name }}</td>
                                <td  class="{{ $cssClass }}"  >{{ $item->customer_name }}</td>
                                <td  class="{{ $cssClass }}"  >{{ $item->customer_company }}</td>
                                <td  class="{{ $cssClass }}"  >{{ $item->customer_phone }}</td>
                                <td  class="{{ $cssClass }}"  >{{ $item->status }}</td>
                                <td  class="{{ $cssClass }}"  >{{  substr($item->description, 0, 10) }}...</td>
                                <td  >
                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                        {{-- <button type="button" class="btn btn-secondary" @if($item->deleted_at) hidden @endif>Actualizar</button> --}}
                                        <a href="{{ route('notes.edit', $item->id) }}" class="btn btn-secondary" @if($item->deleted_at) hidden @endif>
                                            Actualizar
                                        </a>
                                        <form action="{{ route('notes.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

{{-- Auth::user()->department->id != \App\Models\Department::DEPT_ATC || --}}

                                            <button type="submit" class="btn btn-danger" 
                                                @if (
                                                Auth::user()->role->id != \App\Models\Role::ROLE_JEFE ||
                                                Auth::user()->role->id != \App\Models\Role::ROLE_RESPONSABLE
                                                )
                                                disabled
                                                @endif

                                                @if($item->deleted_at)
                                                hidden
                                                @endif
                                            >
                                                Borrar
                                            </button>
                                        </form>


                                        <button type="button" class="btn btn-success">Activar</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
