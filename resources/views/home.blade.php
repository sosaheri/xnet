@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Crear nota') }}</div>
    
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="InputDepartment">Departamento</label>
                            <select class="form-control" id="InputDepartment">
                                <option>Seleccione departamento</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="InputDescripcion">Descripción</label>
                            <textarea class="form-control" id="InputDescripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputName">Nombre cliente</label>
                            <input class="form-control" id="InputName" type="text" >
                        </div>
                        <div class="form-group">
                            <label for="InputCompany">Compañia</label>
                            <input class="form-control" id="InputCompany" type="text" >
                        </div>
                        <div class="form-group">
                            <label for="InputPhone">Teléfono de contacto</label>
                            <input class="form-control" id="InputPhone" type="text" >
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Mis Notas') }}</div>

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
                            <tr>
                                <th scope="row">1</th>
                                <td>Marcos</td>
                                <td>Juan Cliente</td>
                                <td>Los rapiditos</td>
                                <td>9861759</td>
                                <td>Pendiente</td>
                                <td>Necesitamo...</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                        <button type="button" class="btn btn-secondary">Actualizar</button>
                                        <button type="button" class="btn btn-danger">Borrar</button>
                                        <button type="button" class="btn btn-success">Activar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Marcos</td>
                                <td>Juan Cliente</td>
                                <td>Los rapiditos</td>
                                <td>9861759</td>
                                <td>Pendiente</td>
                                <td>Necesitamo...</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                        <button type="button" class="btn btn-secondary">Actualizar</button>
                                        <button type="button" class="btn btn-danger">Borrar</button>
                                        <button type="button" class="btn btn-success">Activar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
