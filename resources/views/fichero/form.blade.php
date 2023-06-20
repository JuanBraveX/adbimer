<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('foto_perfil') }}
            {{ Form::text('foto_perfil', $fichero->foto_perfil, ['class' => 'form-control' . ($errors->has('foto_perfil') ? ' is-invalid' : ''), 'placeholder' => 'Foto Perfil']) }}
            {!! $errors->first('foto_perfil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('banner') }}
            {{ Form::text('banner', $fichero->banner, ['class' => 'form-control' . ($errors->has('banner') ? ' is-invalid' : ''), 'placeholder' => 'Banner']) }}
            {!! $errors->first('banner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_1') }}
            {{ Form::text('foto_1', $fichero->foto_1, ['class' => 'form-control' . ($errors->has('foto_1') ? ' is-invalid' : ''), 'placeholder' => 'Foto 1']) }}
            {!! $errors->first('foto_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_2') }}
            {{ Form::text('foto_2', $fichero->foto_2, ['class' => 'form-control' . ($errors->has('foto_2') ? ' is-invalid' : ''), 'placeholder' => 'Foto 2']) }}
            {!! $errors->first('foto_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_3') }}
            {{ Form::text('foto_3', $fichero->foto_3, ['class' => 'form-control' . ($errors->has('foto_3') ? ' is-invalid' : ''), 'placeholder' => 'Foto 3']) }}
            {!! $errors->first('foto_3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_4') }}
            {{ Form::text('foto_4', $fichero->foto_4, ['class' => 'form-control' . ($errors->has('foto_4') ? ' is-invalid' : ''), 'placeholder' => 'Foto 4']) }}
            {!! $errors->first('foto_4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_5') }}
            {{ Form::text('foto_5', $fichero->foto_5, ['class' => 'form-control' . ($errors->has('foto_5') ? ' is-invalid' : ''), 'placeholder' => 'Foto 5']) }}
            {!! $errors->first('foto_5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('qr') }}
            {{ Form::text('qr', $fichero->qr, ['class' => 'form-control' . ($errors->has('qr') ? ' is-invalid' : ''), 'placeholder' => 'Qr']) }}
            {!! $errors->first('qr', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('qrImg') }}
            {{ Form::text('qrImg', $fichero->qrImg, ['class' => 'form-control' . ($errors->has('qrImg') ? ' is-invalid' : ''), 'placeholder' => 'Qrimg']) }}
            {!! $errors->first('qrImg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pdf') }}
            {{ Form::text('pdf', $fichero->pdf, ['class' => 'form-control' . ($errors->has('pdf') ? ' is-invalid' : ''), 'placeholder' => 'Pdf']) }}
            {!! $errors->first('pdf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('video_link') }}
            {{ Form::text('video_link', $fichero->video_link, ['class' => 'form-control' . ($errors->has('video_link') ? ' is-invalid' : ''), 'placeholder' => 'Video Link']) }}
            {!! $errors->first('video_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>