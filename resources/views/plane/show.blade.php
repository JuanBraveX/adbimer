@extends('layouts.app')

@section('template_title')
    {{ $plane->name ?? "{{ __('Show') Plane" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Plane</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('planes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $plane->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $plane->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $plane->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $plane->descuento }}
                        </div>
                        <form action="{{ route('planes.destroy',$plane->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('planes.edit',$plane->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
