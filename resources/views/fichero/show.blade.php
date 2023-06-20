@extends('layouts.app')

@section('template_title')
    {{ $fichero->name ?? "{{ __('Show') Fichero" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Fichero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ficheros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Foto Perfil:</strong>
                            <img class="col-md-2" onerror="this.style.display='none'" src="{{ env("URL_BIMER") }}{{ $fichero->foto_perfil }}">
                        </div>
                        <div class="form-group">
                            <strong>Banner:</strong>
                            <img class="col-md-2" onerror="this.style.display='none'" src="{{ env("URL_BIMER") }}{{ $fichero->banner }}">
                        </div>
                        <div class="form-group">
                            <strong>Foto 1:</strong>
                            <img class="col-md-2" onerror="this.style.display='none'" src="{{ env("URL_BIMER") }}{{ $fichero->foto_1 }}">
                        </div>
                        <div class="form-group">
                            <strong>Foto 2:</strong>
                            <img class="col-md-2" onerror="this.style.display='none'" src="{{ env("URL_BIMER") }}{{ $fichero->foto_2 }}">
                        </div>
                        <div class="form-group">
                            <strong>Foto 3:</strong>
                            <img class="col-md-2" onerror="this.style.display='none'" src="{{ env("URL_BIMER") }}{{ $fichero->foto_3 }}">
                        </div>
                        <div class="form-group">
                            <strong>Foto 4:</strong>
                            <img class="col-md-2" onerror="this.style.display='none'" src="{{ env("URL_BIMER") }}{{ $fichero->foto_4 }}">
                        </div>
                        <div class="form-group">
                            <strong>Foto 5:</strong>
                            <img class="col-md-2" onerror="this.style.display='none'" src="{{ env("URL_BIMER") }}{{ $fichero->foto_5 }}">
                        </div>
                        <div class="form-group">
                            <strong>Qr:</strong>
                            {{ $fichero->qr }}
                        </div>
                        <div class="form-group">
                            <strong>Qrimg:</strong>
                            <img class="col-md-2" onerror="this.style.display='none'" src="{{ env("URL_BIMER") }}/{{ $fichero->qrImg }}">
                        </div>
                        <div class="form-group">
                            <strong>Pdf:</strong>
                            <a href="{{ env("URL_BIMER") }}{{ $fichero->pdf }}">Archivo PDF</a>
                        </div>
                        <div class="form-group">
                            <strong>Video Link:</strong>
                            {{ $fichero->video_link }}
                        </div>
                        <form method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('ficheros.show',$fichero->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                            <a class="btn btn-sm btn-success" href="{{ route('ficheros.edit',$fichero->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
