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
                <div class="panel-title"><h2>Actualizar</h2></div>

              </div>

                <div class="panel-body">

                    <section class="example mt-4">

                      <form method="POST" action="{{ route('admin/users/update',$users->id) }}" role="form" enctype="multipart/form-data">

                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        @include('admin.users.frontend.front')

                      </form>

                    </section>

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
