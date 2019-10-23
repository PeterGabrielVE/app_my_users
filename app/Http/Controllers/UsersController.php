<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;

class UsersController extends Controller
{
    // Crear un Registro (Create)
    public function crear()
    {
        $users = User::all();
        return view('admin.users.crear', compact('users'));
    }

    // Proceso de Creación de un Registro
    public function store(ItemCreateRequest $request)
    {
        // Instancio al modelo Usuarios que hace llamado a la tabla 'Users' de la Base de Datos
        $users = new User;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $users->name = $request->name;
        $users->email = $request->email;
        $users->cedula = $request->cedula;
        $users->cargo = $request->cargo;

        // Inserto todos los datos en mi tabla 'users'
        $users->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/users')->with('message','Guardado Satisfactoriamente !');

    }



    // Leer Registros (Read)
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
     }


    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $users = User::find($id);
        return view('admin/users.actualizar',['users'=>$users]);
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequest $request, $id)
    {
        // Recibo todos los datos desde el formulario Actualizar
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->cedula = $request->cedula;
        $users->cargo = $request->cargo;

        // Actualizo los datos en la tabla 'Users'
        $users->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/users');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $users = User::find($id);


        // Elimino el registro de la tabla 'Users'
        User::destroy($id);

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/users');
    }
}
