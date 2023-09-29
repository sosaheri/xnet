@extends('layouts.app')

@section('content')
<div class="container">
 
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Editar nota') }}</div>

                <div class="card-body">
                    <form action="{{ route('notes.update', $note->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        @if (Auth::user()->id == $note->user_id ||
                        (       Auth::user()->role->id == \App\Models\Role::ROLE_JEFE ||
                                Auth::user()->role->id == \App\Models\Role::ROLE_RESPONSABLE))
                            <div class="form-group">
                                <label for="InputDescripcion">Descripción</label>
                                <textarea class="form-control" id="InputDescripcion" name="description" rows="3">{{ $note->description }}</textarea>
                                @error('description')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="InputDepartment">Estado</label>
                            <select class="form-control" id="InputStatus" name="status">
                                @switch($note->status)
                                    @case('pending')
                                        <option value="pending" selected>Pendiente</option>
                                        <option value="process">En proceso</option>
                                        <option value="finish">Finalizado</option>
                                        @break
                                    @case('process')
                                        <option value="process" selected>En proceso</option>
                                        <option value="pending">Pendiente</option>
                                        <option value="finish">Finalizado</option>
                                        @break
                                    @case('finish')
                                        <option value="finish" selected>Finalizado</option>
                                        <option value="process">En proceso</option>
                                        <option value="pending">Pendiente</option>                                        
                                        @break
                                    @default                                        
                                @endswitch                                
                            </select>
                            @error('department_id')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="InputPhone">Observación</label>
                            <input class="form-control" id="InputObservation" name="observation" type="text" value="{{  $note->observation }}">
                            @error('observation')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="InputPhone">Última actualización: </label>
                            {{  $note->saved_at }}
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection