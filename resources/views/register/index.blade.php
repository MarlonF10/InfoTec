@extends('layouts.app')

@section('template_title')
    Register
@endsection

@section('content')
<h3>Registro</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            

                           
                             
                              </div>
                             
                        <a class="btn btn-primary" href="{{ route('registers.create') }}">Nuevo</a>                        
                       
                        @can('crear-register')
                        <a href= "/exportexcel" class="btn btn-success"> Exportar </a> 
                        @endcan
                        <input class='btn btn-dark' type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
                    
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre de estudiante</th>
										<th>Carrera Estudiante</th>
										<th>Genero</th>
										<th>Estado</th>
										<th>Fecha de registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registers as $register)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $register->name_student }}</td>
											<td>{{ $register->career_student }}</td>
											<td>{{ $register->genere }}</td>
											<td>{{ $register->state }}</td>
											<td>{{ $register->register_date }}</td>

                                            <td>
                                            @can('editar-register')
                                            <a class="btn btn-primary" href="{{ route('registers.edit',$register->id) }}">Editar</a>
                                        @endcan
                                        
                                        @can('borrar-register')
                                            {!! Form::open(['method' => 'DELETE','route' => ['registers.destroy', $register->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                        
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $registers->links() !!}
            </div>
        </div>
    </div>
@endsection
