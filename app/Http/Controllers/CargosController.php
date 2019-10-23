<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearCargosRequest;
use App\Http\Requests\EditarCargosRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;

class CargosController extends Controller
{
    // Crear un Registro (Create)
    public function crear()
    {
        $cargos = Cargo::all();
        return view('admin.cargos.crear', compact('cargos'));
    }

    // Proceso de Creación de un Registro
    public function store(CrearCargosRequest $request)
    {
        // Instancio al modelo cargos que hace llamado a la tabla 'cargos' de la Base de Datos
        $cargos = new Cargo;
        //dd($request->all());
        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $cargos->name = $request->name;
        $cargos->description = $request->description;

        // Inserto todos los datos en mi tabla 'cargos'
        $cargos->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/cargos')->with('message','Guardado Satisfactoriamente !');

    }



    // Leer Registros (Read)
    public function index()
    {
        $cargos = Cargo::paginate(10);
        return view('admin.cargos.index', compact('cargos'));
     }


    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $cargos = Cargo::find($id);
        return view('admin/cargos.actualizar',['cargos'=>$cargos]);
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(EditarCargosRequest $request, $id)
    {
        // Recibo todos los datos desde el formulario Actualizar
        //dd($request->all());
        $cargos = Cargo::find($id);
        $cargos->name = $request->name;
        $cargos->description = $request->description;

        // Actualizo los datos en la tabla 'cargos'
        $cargos->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/cargos');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $cargos = Cargo::find($id);


        // Elimino el registro de la tabla 'cargos'
        Cargo::destroy($id);

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/cargos');
    }
}
