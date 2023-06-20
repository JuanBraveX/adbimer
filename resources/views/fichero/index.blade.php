@extends('layouts.app')

@section('template_title')
    Fichero
@endsection

@section('content')
    <div class="container-fluid">
        <div class="form-group col-md-4 p-3">
            <input type="text" class="form-control" id="filtroTabla" placeholder="Filtrar tabla">
        </div> 
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Fichero') }}
                            </span>

                    
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover tabla-filtrable" id="tablaSuscripciones">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Foto Perfil</th>
										<th>Banner</th>
										<th>Foto 1</th>
										<th>Foto 2</th>
										<th>Foto 3</th>
										<th>Foto 4</th>
										<th>Foto 5</th>
										<th>Qr</th>
										<th>Qrimg</th>
										<th>Pdf</th>
										<th>Video Link</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ficheroes as $fichero)
                                        <tr>
                                            <td>{{ $fichero->id }}</td>
											<td class="col-1"><img class="w-100" src="{{ env("URL_BIMER") }}{{ $fichero->foto_perfil }}" onerror="this.style.display='none'" alt="foto perfil"></td>
											<td class="col-1"><img class="w-100" src="{{ env("URL_BIMER") }}{{ $fichero->banner }}" onerror="this.style.display='none'" alt="banner"></td>
											<td class="col-1"><img class="w-100" src="{{ env("URL_BIMER") }}{{ $fichero->foto_1 }}" onerror="this.style.display='none'" alt="imagen de carrusel 1"></td>
											<td class="col-1"><img class="w-100" src="{{ env("URL_BIMER") }}{{ $fichero->foto_2 }}" onerror="this.style.display='none'" alt="imagen de carrusel 2"></td>
											<td class="col-1"><img class="w-100" src="{{ env("URL_BIMER") }}{{ $fichero->foto_3 }}" onerror="this.style.display='none'" alt="imagen de carrusel 3"></td>
											<td class="col-1"><img class="w-100" src="{{ env("URL_BIMER") }}{{ $fichero->foto_4 }}" onerror="this.style.display='none'" alt="imagen de carrusel 4"></td>
											<td class="col-1"><img class="w-100" src="{{ env("URL_BIMER") }}{{ $fichero->foto_5 }}" onerror="this.style.display='none'" alt="imagen de carrusel 5"></td>
											<td class="col-1">{{ $fichero->qr }}</td>
											<td class="col-1"><img class="w-100" src="{{ env("URL_BIMER") }}/{{ $fichero->qrImg }}"></td>
											<td class="col-1"><a target="_blank" href="{{ env("URL_BIMER") }}{{ $fichero->pdf }}">PDF</a></td>
											<td class="col-1">{{ $fichero->video_link }}</td>

                                            <td>
                                                <form method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ficheros.show',$fichero->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ficheros.edit',$fichero->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
