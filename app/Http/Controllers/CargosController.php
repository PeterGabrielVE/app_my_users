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
        dd($request->all());
        // Recibo todos los datos del formulario de la vista 'crear.blade.php'


        // Inserto todos los datos en mi tabla 'cargos'
        $cargos->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/cargos')->with('message','Guardado Satisfactoriamente !');

    }



    // Leer Registros (Read)
    public function index()
    {
        $cargos = Cargo::all();
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
        dd($request->all());
        $cargos = Cargo::find($id);
        $cargos->name = $request->name;
        //$cargos->description = $request->description;

        /*$get_all_files_array = "";

        if(count($request->input('job_create_contractor_file_upload')) > 0 ) {

           $all_files_array = array();


            for ($i=0; $i < count($request->input('job_create_contractor_file_upload')); $i++)  {
            $file = $request->input('job_create_contractor_file_upload')[$i];
            $save_name = $file;

            $jobs = new JobsModel();
            $jobs->Jobs_Attachments = $save_name;


            array_push($all_files_array, $save_name);
            }

            $get_all_files_array = implode(",", $all_files_array);

        } */

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
