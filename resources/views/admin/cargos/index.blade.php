@include('admin.layouts.header')

      <div class="page-content">
        <div class="row">

          <div class="col-md-2">
          @include('admin.layouts.sidebar')
          </div>

            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin/cargos') }}">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cargos</li>
          </ol>
        </nav>

        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="row">
                            <div class="col-md-6 panel-title"><h2>Cargos</h2></div>
                            <div class="col-md-6"><a href="{{ route('admin/cargos/crear') }}" class="btn btn-success ml-6"><i class="fa fa-plus-circle"></i>  Agregar
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
                                          <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($cargos as $cargo)
                                          <tr>
                                            <td class="v-align-middle">{{$cargo->name}}</td>
                                            <td class="v-align-middle">{{$cargo->description}}</td>
                                            <td class="v-align-middle">

                                              <form action="{{ route('admin/cargos/eliminar',$cargo->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <a href="{{ route('admin/cargos/actualizar',$cargo->id) }}" class="btn btn-primary" title="Editar"><i class="fas fa-edit fa-2x"></i></a>

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
                                                        {{ $cargos->links() }}
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
