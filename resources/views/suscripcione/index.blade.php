@extends('layouts.app')

@section('template_title')
    Suscripcione
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
                                {{ __('Suscripcione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('suscripciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Cliente</th>
										<th>Plan</th>
										<th>Inicio En</th>
										<th>Finaliza En</th>
										<th>Cancelo En</th>
										<th>Renovacion</th>
										<th>Renovacion Cancelada</th>
										<th>Cantidad</th>
										<th>Precio Neto</th>
										<th>Descuento</th>
										<th>Precio Real</th>
										<th>Suspendida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suscripciones as $suscripcione)
                                        <tr>
                                            <td>{{ $suscripcione->id }}</td>
                                            <td>{{ $suscripcione->user->email }}</td>
                                            <td>{{ $suscripcione->plane->nombre }}</td>
											<td>{{ $suscripcione->inicio_en }}</td>
											<td>{{ $suscripcione->finaliza_en }}</td>
											<td>{{ $suscripcione->cancelo_en }}</td>
											<td>{{ $suscripcione->renovacion }}</td>
											<td>{{ $suscripcione->renovacion_cancelada }}</td>
											<td>{{ $suscripcione->cantidad }}</td>
											<td>{{ $suscripcione->precio_neto }}</td>
											<td>{{ $suscripcione->descuento }}</td>
											<td>{{ $suscripcione->precio_real }}</td>
											<td>{{ $suscripcione->suspendida }}</td>

                                            <td>
                                                <form action="{{ route('suscripciones.destroy',$suscripcione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('suscripciones.show',$suscripcione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('suscripciones.edit',$suscripcione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
