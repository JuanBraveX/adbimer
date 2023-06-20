@extends('layouts.app')

@section('template_title')
    Rede
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
                                {{ __('Rede') }}
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
										<th>Facebook</th>
										<th>Linkedin</th>
										<th>Twitter</th>
										<th>Youtube</th>
										<th>Tiktok</th>
										<th>Whatsapp</th>
										<th>Indeed</th>
										<th>Instagram</th>
										<th>Pagina Web</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($redes as $rede)
                                        <tr>
                                            <td>{{ $rede->id }}</td>
											<td>{{ $rede->facebook }}</td>
											<td>{{ $rede->linkedin }}</td>
											<td>{{ $rede->twitter }}</td>
											<td>{{ $rede->youtube }}</td>
											<td>{{ $rede->tiktok }}</td>
											<td>{{ $rede->whatsapp }}</td>
											<td>{{ $rede->indeed }}</td>
											<td>{{ $rede->instagram }}</td>
											<td>{{ $rede->pagina_web }}</td>

                                            <td>
                                                <form method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('redes.show',$rede->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('redes.edit',$rede->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
