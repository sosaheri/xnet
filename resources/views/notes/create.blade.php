@extends('layouts.app')

@section('content')
<div class="container">
 
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Crear nota') }}</div>

                <div class="card-body">
                    <form action="{{ route('notes.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="InputDepartment">Departamento</label>
                            <select class="form-control" id="InputDepartment" name="department_id">
                                <option>Seleccione departamento</option>
                                @foreach ($departments as $item )
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="InputDescripcion">Descripción</label>
                            <textarea class="form-control" id="InputDescripcion" name="description" rows="3"></textarea>
                            @error('description')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="InputName">Nombre cliente</label>
                            <input class="form-control" id="InputName" name="customer_name" type="text">
                            @error('customer_name')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="InputCompany">Compañia</label>
                            <input class="form-control" id="InputCompany" name="customer_company" type="text">
                            @error('customer_company')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="InputPhone">Teléfono de contacto</label>
                            <input class="form-control" id="InputPhone" name="customer_phone" type="text">
                            @error('customer_phone')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection