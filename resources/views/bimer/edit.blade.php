@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Bimer
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Bimer</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bimers.update', $bimer->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('bimer.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
