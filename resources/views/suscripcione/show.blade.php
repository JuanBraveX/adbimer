@extends('layouts.app')

@section('template_title')
    {{ $suscripcione->name ?? "{{ __('Show') Suscripcione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Suscripcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suscripciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $suscripcione->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Plan:</strong>
                            {{ $suscripcione->id_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Inicio En:</strong>
                            {{ $suscripcione->inicio_en }}
                        </div>
                        <div class="form-group">
                            <strong>Finaliza En:</strong>
                            {{ $suscripcione->finaliza_en }}
                        </div>
                        <div class="form-group">
                            <strong>Cancelo En:</strong>
                            {{ $suscripcione->cancelo_en }}
                        </div>
                        <div class="form-group">
                            <strong>Renovacion:</strong>
                            {{ $suscripcione->renovacion }}
                        </div>
                        <div class="form-group">
                            <strong>Renovacion Cancelada:</strong>
                            {{ $suscripcione->renovacion_cancelada }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $suscripcione->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Neto:</strong>
                            {{ $suscripcione->precio_neto }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $suscripcione->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Real:</strong>
                            {{ $suscripcione->precio_real }}
                        </div>
                        <div class="form-group">
                            <strong>Suspendida:</strong>
                            {{ $suscripcione->suspendida }}
                        </div>
                        <form action="{{ route('suscripciones.destroy',$suscripcione->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('suscripciones.edit',$suscripcione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
