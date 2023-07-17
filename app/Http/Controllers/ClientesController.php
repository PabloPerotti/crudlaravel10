<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
use DateTime; 

class ClientesController extends Controller
{
    // Listar todos los productos en la vista principal 
    public function index()
    {
        $clientes = Clientes::all();
        return view('admin.clientes.index', compact('clientes')); 
    }

    // Crear un Registro (Create) 
    public function crear()
    {
        $clientes = Clientes::all();
        return view('admin.clientes.crear', compact('clientes'));
    } 

    // Proceso de Creación de un Registro 
    public function store(ItemCreateRequest $request)
    {
        // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
        $clientes = new Clientes; 

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $clientes->name = $request->name;
        $clientes->email = $request->email;
        $clientes->direccion = $request->direccion;
        
        // Almacenos la imagen en la carpeta publica especifica, esto lo veremos más adelante 
        $clientes->img = $request->file('img')->store('/');
        
        // Guardamos la fecha de creación del registro 
        $clientes->created_at = (new DateTime)->getTimestamp();

        // Inserto todos los datos en mi tabla 'clientes' 
        $clientes->save();

        // Hago una redirección a la vista principal con un mensaje 
        return redirect('admin/clientes')->with('message','Guardado Satisfactoriamente !'); 
    } 

    // Leer Registro por 'id' (Read) 
    public function show($id)
    {
        $clientes = Clientes::find($id);
        return view('admin.clientes.detalles', compact('clientes')); 
    } 

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $clientes = Clientes::find($id);
        return view('admin/clientes.actualizar',['clientes'=>$clientes]);
    } 

    
    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequest $request, $id)
    {        
        // Recibo todos los datos desde el formulario Actualizar
        $clientes = Clientes::find($id);
        $clientes->name = $request->name;
        $clientes->email = $request->email;
        $clientes->direccion = $request->direccion;

        // Recibo la imagen desde el formulario Actualizar
        if ($request->hasFile('img')) {
            $clientes->img = $request->file('img')->store('/');
        }

        // Guardamos la fecha de actualización del registro 
        $clientes->updated_at = (new DateTime)->getTimestamp();
        
        // Actualizo los datos en la tabla 'clientes'
        $clientes->save();

        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/clientes');
    }

    // Eliminar un Registro 
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $clientes = Clientes::find($id);

        // Elimino la imagen de la carpeta 'uploads', esto lo veremos más adelante
        $imagen = explode(",", $clientes->img);
        Storage::delete($clientes->img);
            
        // Elimino el registro de la tabla 'clientes' 
        Clientes::destroy($id); 

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en 
        // una tabla llamada por ejemplo 'clientes_eliminados' y alli guardas su fecha de eliminación 
        // $clientes->deleted_at = (new DateTime)->getTimestamp();
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/clientes');
    } 

} //

