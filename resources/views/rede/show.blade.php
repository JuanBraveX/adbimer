@extends('layouts.app')

@section('template_title')
    {{ $rede->name ?? "{{ __('Show') Rede" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rede</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('redes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Facebook:</strong>
                            {{ $rede->facebook }}
                        </div>
                        <div class="form-group">
                            <strong>Linkedin:</strong>
                            {{ $rede->linkedin }}
                        </div>
                        <div class="form-group">
                            <strong>Twitter:</strong>
                            {{ $rede->twitter }}
                        </div>
                        <div class="form-group">
                            <strong>Youtube:</strong>
                            {{ $rede->youtube }}
                        </div>
                        <div class="form-group">
                            <strong>Tiktok:</strong>
                            {{ $rede->tiktok }}
                        </div>
                        <div class="form-group">
                            <strong>Whatsapp:</strong>
                            {{ $rede->whatsapp }}
                        </div>
                        <div class="form-group">
                            <strong>Indeed:</strong>
                            {{ $rede->indeed }}
                        </div>
                        <div class="form-group">
                            <strong>Instagram:</strong>
                            {{ $rede->instagram }}
                        </div>
                        <div class="form-group">
                            <strong>Pagina Web:</strong>
                            {{ $rede->pagina_web }}
                        </div>
                        <form method="POST">
                                                
                                                    <a class="btn btn-sm btn-success" href="{{ route('redes.edit',$rede->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    
                                                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
