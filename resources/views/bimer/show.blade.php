@extends('layouts.app')

@section('template_title')
    {{ $bimer->name ?? "{{ __('Show') Bimer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bimer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bimers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Suscripcion:</strong>
                            {{ $bimer->id_suscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $bimer->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $bimer->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $bimer->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $bimer->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $bimer->puesto }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $bimer->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion Text:</strong>
                            {{ $bimer->ubicacion_text }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion Mapa:</strong>
                            {{ $bimer->ubicacion_mapa }}
                        </div>
                        <div class="form-group">
                            <strong>Color Texto:</strong>
                            {{ $bimer->color_texto }}
                        </div>
                        <div class="form-group">
                            <strong>Color Fondo:</strong>
                            {{ $bimer->color_fondo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ficheros:</strong>
                            <br>
                            <a class="btn btn-sm btn-warning" href="{{ route('ficheros.edit',$bimer->id_ficheros) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar Ficheros') }}</a>
                        </div>
                        <div class="form-group">
                            <strong>Id Redes:</strong>
                            <br>
                            <a class="btn btn-sm btn-warning" href="{{ route('redes.edit',$bimer->id_redes) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar Redes') }}</a>
                        </div>
                        <div class="form-group">
                            <strong>Ver Bimer:</strong>
                            <br>
                            <a class="btn btn-sm btn-primary" target="_blank" href="{{ env("URL_BIMER") }}/bimers/{{ $bimer->id }}"><i class="fa fa-fw fa-edit"></i> {{ __('Ver Bimer') }}</a>
                        </div>
                        <br>
                        <form action="{{ route('bimers.destroy',$bimer->id) }}" method="POST">
                            <a class="btn btn-sm btn-success" href="{{ route('bimers.edit',$bimer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
