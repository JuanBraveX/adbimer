<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('facebook') }}
            {{ Form::text('facebook', $rede->facebook, ['class' => 'form-control' . ($errors->has('facebook') ? ' is-invalid' : ''), 'placeholder' => 'Facebook']) }}
            {!! $errors->first('facebook', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('linkedin') }}
            {{ Form::text('linkedin', $rede->linkedin, ['class' => 'form-control' . ($errors->has('linkedin') ? ' is-invalid' : ''), 'placeholder' => 'Linkedin']) }}
            {!! $errors->first('linkedin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('twitter') }}
            {{ Form::text('twitter', $rede->twitter, ['class' => 'form-control' . ($errors->has('twitter') ? ' is-invalid' : ''), 'placeholder' => 'Twitter']) }}
            {!! $errors->first('twitter', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('youtube') }}
            {{ Form::text('youtube', $rede->youtube, ['class' => 'form-control' . ($errors->has('youtube') ? ' is-invalid' : ''), 'placeholder' => 'Youtube']) }}
            {!! $errors->first('youtube', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiktok') }}
            {{ Form::text('tiktok', $rede->tiktok, ['class' => 'form-control' . ($errors->has('tiktok') ? ' is-invalid' : ''), 'placeholder' => 'Tiktok']) }}
            {!! $errors->first('tiktok', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('whatsapp') }}
            {{ Form::text('whatsapp', $rede->whatsapp, ['class' => 'form-control' . ($errors->has('whatsapp') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp']) }}
            {!! $errors->first('whatsapp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('indeed') }}
            {{ Form::text('indeed', $rede->indeed, ['class' => 'form-control' . ($errors->has('indeed') ? ' is-invalid' : ''), 'placeholder' => 'Indeed']) }}
            {!! $errors->first('indeed', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('instagram') }}
            {{ Form::text('instagram', $rede->instagram, ['class' => 'form-control' . ($errors->has('instagram') ? ' is-invalid' : ''), 'placeholder' => 'Instagram']) }}
            {!! $errors->first('instagram', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pagina_web') }}
            {{ Form::text('pagina_web', $rede->pagina_web, ['class' => 'form-control' . ($errors->has('pagina_web') ? ' is-invalid' : ''), 'placeholder' => 'Pagina Web']) }}
            {!! $errors->first('pagina_web', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>