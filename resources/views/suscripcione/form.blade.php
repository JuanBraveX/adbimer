<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_cliente', $suscripcione->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_plan') }}
            {{ Form::text('id_plan', $suscripcione->id_plan, ['class' => 'form-control' . ($errors->has('id_plan') ? ' is-invalid' : ''), 'placeholder' => 'Id Plan']) }}
            {!! $errors->first('id_plan', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inicio_en') }}
            {{ Form::date('inicio_en', $suscripcione->inicio_en, ['class' => 'form-control' . ($errors->has('inicio_en') ? ' is-invalid' : ''), 'placeholder' => 'Inicio En']) }}
            {!! $errors->first('inicio_en', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cancelo_en') }}
            {{ Form::date('cancelo_en', $suscripcione->cancelo_en, ['class' => 'form-control' . ($errors->has('cancelo_en') ? ' is-invalid' : ''), 'placeholder' => 'Cancelo En']) }}
            {!! $errors->first('cancelo_en', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('renovacion') }}
            {{ Form::number('renovacion', $suscripcione->renovacion, ['class' => 'form-control' . ($errors->has('renovacion') ? ' is-invalid' : ''), 'placeholder' => 'Renovacion', 'step' => '1', 'min' => '0', 'max' => '1']) }}
            {!! $errors->first('renovacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('renovacion_cancelada') }}
            {{ Form::date('renovacion_cancelada', $suscripcione->renovacion_cancelada, ['class' => 'form-control' . ($errors->has('renovacion_cancelada') ? ' is-invalid' : ''), 'placeholder' => 'Renovacion Cancelada']) }}
            {!! $errors->first('renovacion_cancelada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::number('cantidad', $suscripcione->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad', 'step' => '1', 'min' => '1', 'max' => '100']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suspendida') }}
            {{ Form::number('suspendida', $suscripcione->suspendida, ['class' => 'form-control' . ($errors->has('suspendida') ? ' is-invalid' : ''), 'placeholder' => 'Suspendida', 'step' => '1', 'min' => '0', 'max' => '1']) }}
            {!! $errors->first('suspendida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>