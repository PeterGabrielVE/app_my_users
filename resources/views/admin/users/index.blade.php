@include('admin.layouts.header')

<div class="page-content">
                    <div class="row">
                        <div class="col-md-2">
                            @include('admin.layouts.sidebar')
                        </div>
                        <div class="col-md-10">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin/users') }}">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                                </ol>
                            </nav>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content-box-large">
                                    <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-10 panel-title"><h2>Usuarios</h2></div>
                                        <div class="col-md-2"><a href="{{ route('admin/users/crear') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i>  Agregar
                                        </a></div>
                                    </div>

                                    </div>
                                    <div class="panel-body">

                                        @if(Session::has('message'))
                                            <div class="alert alert-primary" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ Session::get('message') }}
                                            </div>
                                        @endif

                                        <section class="example mt-4">
                                            <div class="table-responsive">

                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="bg-primary">
                                                            <th>Nombre</th>
                                                            <th>Correo</th>
                                                            <th>Cedula</th>
                                                            <th>Cargo</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td class="v-align-middle">{{$user->name}}</td>
                                                            <td class="v-align-middle">{{$user->email}}</td>
                                                            <td class="v-align-middle">{{$user->cedula}}</td>
                                                            <td class="v-align-middle">{{$user->cargo}}</td>
                                                            <td class="v-align-middle">

                                                            <form action="{{ route('admin/users/eliminar',$user->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                                                                <input type="hidden" name="_method" value="PUT">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <a href="{{ route('admin/users/actualizar',$user->id) }}" class="btn btn-primary" title="Editar"><i class="fas fa-edit fa-2x"></i></a>

                                                                <button type="submit" class="btn btn-danger" title="Eliminar"><i class="fas fa-trash-alt fa-2x"></i></button>

                                                            </form>

                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                                    </div>

                                                </section>
                                            </div>
                                            <div class="row" style="justify-content:center;">
                                                        {{ $users->links() }}
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
          </div>
          <hr>
        </div>
@include('admin.layouts.footer')

