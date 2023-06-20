@extends('layouts.app')

@section('template_title')
    Bimer
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
                                {{ __('Bimer') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bimers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
										<th>Id Suscripcion</th>
										<th>Nombre</th>
										<th>Empresa</th>
										<th>Telefono</th>
										<th>Puesto</th>
										<th>Correo</th>
										<th>Id Ficheros</th>
										<th>Id Redes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bimers as $bimer)
                                        <tr>
                                            <td>{{ $bimer->id }}</td>
											<td>{{ $bimer->id_suscripcion }}</td>
											<td>{{ $bimer->nombre }} {{ $bimer->apellido }}</td>
											<td>{{ $bimer->empresa }}</td>
											<td>{{ $bimer->telefono }}</td>
											<td>{{ $bimer->puesto }}</td>
											<td>{{ $bimer->correo }}</td>
											<td class="col-1"><a class="btn btn-sm btn-success" href="{{ route('ficheros.edit',$bimer->id_ficheros) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar Ficheros') }}</a></td>
											<td class="col-1"><a class="btn btn-sm btn-success" href="{{ route('redes.edit',$bimer->id_redes) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar Redes') }}</a></td>

                                            <td>
                                                <form action="{{ route('bimers.destroy',$bimer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bimers.show',$bimer->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bimers.edit',$bimer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
