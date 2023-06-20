<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_suscripcion') }}
            {{ Form::text('id_suscripcion', $bimer->id_suscripcion, ['class' => 'form-control' . ($errors->has('id_suscripcion') ? ' is-invalid' : ''), 'placeholder' => 'Id Suscripcion']) }}
            {!! $errors->first('id_suscripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $bimer->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $bimer->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empresa') }}
            {{ Form::text('empresa', $bimer->empresa, ['class' => 'form-control' . ($errors->has('empresa') ? ' is-invalid' : ''), 'placeholder' => 'Empresa']) }}
            {!! $errors->first('empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $bimer->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puesto') }}
            {{ Form::text('puesto', $bimer->puesto, ['class' => 'form-control' . ($errors->has('puesto') ? ' is-invalid' : ''), 'placeholder' => 'Puesto']) }}
            {!! $errors->first('puesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $bimer->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion_text') }}
            {{ Form::text('ubicacion_text', $bimer->ubicacion_text, ['class' => 'form-control' . ($errors->has('ubicacion_text') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion Text']) }}
            {!! $errors->first('ubicacion_text', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion_mapa') }}
            {{ Form::text('ubicacion_mapa', $bimer->ubicacion_mapa, ['class' => 'form-control' . ($errors->has('ubicacion_mapa') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion Mapa']) }}
            {!! $errors->first('ubicacion_mapa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color_texto') }}
            {{ Form::text('color_texto', $bimer->color_texto, ['class' => 'form-control' . ($errors->has('color_texto') ? ' is-invalid' : ''), 'placeholder' => 'Color Texto']) }}
            {!! $errors->first('color_texto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color_fondo') }}
            {{ Form::text('color_fondo', $bimer->color_fondo, ['class' => 'form-control' . ($errors->has('color_fondo') ? ' is-invalid' : ''), 'placeholder' => 'Color Fondo']) }}
            {!! $errors->first('color_fondo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>