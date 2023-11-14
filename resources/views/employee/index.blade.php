@extends('layouts.app')

@section('template_title')
    Employee
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Employee') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('employee.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Genere</th>
										<th>Number Student Employees</th>
										<th>Career</th>
										<th>Register</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $employee->genere }}</td>
											<td>{{ $employee->number_student_employees }}</td>
											<td>{{ $employee->career }}</td>
											<td>{{ $employee->register }}</td>

                                            <td>
                                                <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('employee.show',$employee->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('employee.edit',$employee->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $employees->links() !!}
            </div>
        </div>
    </div>
@endsection
