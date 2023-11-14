@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Usuarios</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body"> 
                      @can('crear,editar,borrar-register')                          
                          <a class="btn btn-primary" href="{{ route('usuarios.create') }}">Nuevo</a>       
                          @endcan 
                          
                          <a class="btn btn-secondary" href="{{ route('home') }}"> {{ __('Volver') }}</a>
                         
                            <table class="table table-striped mt-2">
                              <thead style="background-color:#0d6efd">                                     
                                  <th style="display: none;">ID</th>
                                  <th style="color:#000000;">Nombre</th>
                                  <th style="color:#000000;">E-mail</th>
                                  <th style="color:#000000;">Rol</th>
                                  <th style="color:#000000;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                                @foreach ($usuarios as $usuario)
                                  <tr>
                                    <td style="display: none;">{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>
                                      @if(!empty($usuario->getRoleNames()))
                                        @foreach($usuario->getRoleNames() as $rolNombre)                                       
                                          <h5><span class=" badge-dark">{{ $rolNombre }}</span></h5>
                                        @endforeach
                                      @endif
                                    </td>

                                    <td>    
                                    @can('crear,editar,borrar-register')                              
                                      <a class="btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                                      @endcan
                                      @can('borrar-register')
                                      {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                      {!! Form::close() !!}
                                      @endcan
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $usuarios->links() !!}
                          </div>     
                            
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection