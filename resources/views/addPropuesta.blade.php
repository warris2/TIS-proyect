@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Presentacion de documentos') }}</div>

                <div class="card-body">
                    <form method="put" action="" enctype="multipart/form-data">
                        @csrf
                       
                        
                            <label for=""><strong>{{__('DOCUMENTACION SOBRE A')}}</strong></label>
                        <div class="form-group">
                            <label for="">{{__('Carta de presentacion')}}</label>
                            <div class="form-group">
                                <input class="form-control" type="file" name="cartapdf" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">{{__('Boleta de garantia')}}</label>
                            <div class="form-group">
                                <input class="form-control" type="file" name="boletapdf" class="form-control-file">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">{{__('Conformacion grupo empresa')}}</label>
                            <div class="form-group">
                                <input class="form-control" type="file" name="conformacionpdf" class="form-control-file">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="">{{__('Solvencia tecnica')}}</label>
                            <div class="form-group">
                                <input class="form-control" type="file" name="solvenciapdf" class="form-control-file">
                            </div>
                        </div> 
                        <label for=""><strong>{{__('DOCUMENTACION SOBRE B')}}</strong></label>
                        <div class="form-group">
                            <label for="">{{__('Propuesta Tecnica')}}</label>
                            <div class="form-group">
                                <input class="form-control" type="file" name="propuestapdf" class="form-control-file">
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                                <a href='/convocatorias' class="btn btn-primary " role="button" aria-pressed="true">
                                    {{ __('Volver') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection