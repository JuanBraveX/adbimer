<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('foto_perfil', 'Foto de Perfil') }}
            {{ Form::file('foto_perfil', ['class' => 'form-control' . ($errors->has('foto_perfil') ? ' is-invalid' : ''), 'id' => 'foto-input', 'accept' => 'image/jpeg, image/png, image/svg+xml, image/gif' ]) }}
            {!! $errors->first('foto_perfil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @foreach ($fichero->bimers as $bimer)

        @if ($bimer->suscripcione->plane->nombre !== 'Begginer')
        @if ($bimer->suscripcione->plane->nombre !== 'Ideal')

        <div class="form-group">
            {{ Form::label('banner') }}
            {{ Form::file('banner', ['class' => 'form-control' . ($errors->has('banner') ? ' is-invalid' : ''), 'id' => 'foto-input', 'accept' => 'image/jpeg, image/png, image/svg+xml, image/gif' ]) }}
            {!! $errors->first('banner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif
        @endif

        @if ($bimer->suscripcione->plane->nombre === 'One')
        <div class="form-group">
            {{ Form::label('foto_1') }}
            {{ Form::file('foto_1', ['class' => 'form-control' . ($errors->has('foto_1') ? ' is-invalid' : ''), 'id' => 'foto-input', 'accept' => 'image/jpeg, image/png, image/svg+xml, image/gif' ]) }}
            {!! $errors->first('foto_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_2') }}
            {{ Form::file('foto_2', ['class' => 'form-control' . ($errors->has('foto_2') ? ' is-invalid' : ''), 'id' => 'foto-input', 'accept' => 'image/jpeg, image/png, image/svg+xml, image/gif' ]) }}
            {!! $errors->first('foto_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_3') }}
            {{ Form::file('foto_3', ['class' => 'form-control' . ($errors->has('foto_3') ? ' is-invalid' : ''), 'id' => 'foto-input', 'accept' => 'image/jpeg, image/png, image/svg+xml, image/gif' ]) }}
            {!! $errors->first('foto_3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_4') }}
            {{ Form::file('foto_4', ['class' => 'form-control' . ($errors->has('foto_4') ? ' is-invalid' : ''), 'id' => 'foto-input', 'accept' => 'image/jpeg, image/png, image/svg+xml, image/gif' ]) }}
            {!! $errors->first('foto_4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_5') }}
            {{ Form::file('foto_5', ['class' => 'form-control' . ($errors->has('foto_5') ? ' is-invalid' : ''), 'id' => 'foto-input', 'accept' => 'image/jpeg, image/png, image/svg+xml, image/gif']) }}
            {!! $errors->first('foto_5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif

        <div class="form-group">
            {{ Form::label('Link de redirecion de QR') }}
            {{ Form::text('qr', $fichero->qr, ['class' => 'form-control' . ($errors->has('qr') ? ' is-invalid' : ''), 'placeholder' => 'Video Link']) }}
            {!! $errors->first('qr', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @if ($bimer->suscripcione->plane->nombre === 'One')
        <div class="form-group">
            {{ Form::label('pdf') }}
            {{ Form::file('pdf', ['class' => 'form-control' . ($errors->has('pdf') ? ' is-invalid' : ''), 'accept' => 'application/pdf', 'id' => 'pdf-input']) }}
            {!! $errors->first('pdf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif
        @if ($bimer->suscripcione->plane->nombre !== 'Begginer')
        <div class="form-group">
            {{ Form::label('video_link') }}
            {{ Form::text('video_link', $fichero->video_link, ['class' => 'form-control' . ($errors->has('video_link') ? ' is-invalid' : ''), 'placeholder' => 'Video Link']) }}
            {!! $errors->first('video_link', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif
        @endforeach
        <script>
            document.getElementById('pdf-input').addEventListener('change', function() {
                var fileInput = this;
                var acceptedTypes = ['application/pdf'];
                var file = fileInput.files[0];
                var fileType = file.type;

                if (!acceptedTypes.includes(fileType)) {
                    fileInput.value = '';
                    alert('Solo se permiten archivos PDF');
                }
            });

            document.getElementById('foto-input').addEventListener('change', function() {
                var fileInput = this;
                var acceptedTypes = ['image/jpeg', 'image/png', 'image/svg+xml', 'image/gif'];
                var file = fileInput.files[0];
                var fileType = file.type;

                if (!acceptedTypes.includes(fileType)) {
                    fileInput.value = '';
                    alert('Solo se permiten archivos de imagen en formato JPG, PNG, JPEG, SVG y GIF');
                }
            });
        </script>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div> 
