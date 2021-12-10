@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">{{ __('Empresas postulantes') }}</div>

                <div class="card-body">
                    <form method="GET" name="listaconv">
                        @csrf

                        <table class="table table-responsive table-striped">
                            <thead>
                                <thead>
                                    <th>Empresa</th>
                                    <th>Fecha de presentacion</th>
                                    <th>Carta de presentacion</th>
                                    <th>Boleta de garantia</th>
                                    <th>Conformacion empresa</th>
                                    <th>Solvencia tecnica</th>
                                    <th>Propuesta Tecnica</th>
                                    <th>Opciones</th>
                                    
                                </thead>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div><button type="submit" class="btn btn-danger btn-sm">{{ __('Observar') }}</button></div>
                                            <div><a href='' class="btn btn-primary btn-lg active btn-sm" role="button" aria-pressed="true">{{ __('Aprobar') }}</a></div>
                                        </td>
                                    </tr>
                                
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection