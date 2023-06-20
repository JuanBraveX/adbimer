@extends('layouts.app')

@section('template_title')
    Plane
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
                                {{ __('Plane') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('planes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Descuento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($planes as $plane)
                                        <tr>
                                            <td>{{ $plane->id }}</td>
											<td>{{ $plane->nombre }}</td>
											<td>{{ $plane->descripcion }}</td>
											<td>{{ $plane->precio }}</td>
											<td>{{ $plane->descuento }}</td>

                                            <td>
                                                <form action="{{ route('planes.destroy',$plane->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('planes.show',$plane->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('planes.edit',$plane->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
