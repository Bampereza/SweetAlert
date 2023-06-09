<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use App\Models\Transporte;
use Illuminate\Http\Request;

use Illuminate\Database\QueryException;
//use Illuminate\Support\Facades\Session;

class CamionController extends Controller
{

    public function indexc()
    {
        //pagina de inicio
        //$datos = Personas::all();
        //$datos = Personas::orderBy('id', 'desc')->paginate(3);
        $datos = Camion::orderBy('id', 'asc')->paginate(25);
        return view('inicio-camion', compact('datos'));
    }

    public function createc()
    {
        //el formulario donde nosotros agregamos datos
        return view('agregar-camion');
    }

    public function storec(Request $request)
    {
        //Sirve para guardar datos en la base de datos, esta en la vista agregar camion
        $camiones = new Camion();
        $camiones->id = $request->post('id');
        $camiones->placa_camion = $request->post('placa_camion');
        $camiones->marca = $request->post('marca');
        $camiones->color = $request->post('color');
        $camiones->modelo = $request->post('modelo');
        $camiones->capacidad_toneladas = $request->post('capacidad_toneladas');
        $camiones->transporte_codigo = $request->post('transporte_codigo');
        $camiones->save();

        return redirect()->route("camiones.indexc");
    }

    public function showc($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $camiones = Camion::find($id);
        return view("eliminar-camion", compact('camiones'));
    }

    public function editc($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $camiones = Camion::find($id);
        return view("actualizar-camion", compact('camiones'));
        //echo $id;
    }

    public function updatec(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos, esta en la vista actualizar
        $camiones = Camion::find($id);
        $camiones->id = $request->post('id');
        $camiones->placa_camion = $request->post('placa_camion');
        $camiones->marca = $request->post('marca');
        $camiones->color = $request->post('color');
        $camiones->modelo = $request->post('modelo');
        $camiones->capacidad_toneladas = $request->post('capacidad_toneladas');
        $camiones->transporte_codigo = $request->post('transporte_codigo');
        $camiones->save();

        return redirect()->route("camiones.indexc")->with("success", "Actualizado con exito!");
    }

    public function destroyc($id)

//    public function delete($id)
    {
//        Elimina un registro, se encuentra en la vista eliminar
        $camiones = Camion::find($id);
        $camiones->delete();
        return redirect()->route("camiones.indexc");


//        try {
//            $camiones = Camion::findOrFail($id);
//            $camiones->destroyc();
//            return redirect()->route('camiones.indexc')->with('success', 'Camion eliminado exitosamente.');
//        } catch (Exception $e) {
//            return redirect()->route('camiones.indexc')->with('error', 'Ocurrió un error al eliminar a la personas.');
//        }
//    }
//
//    public function store(Request $request, $transporte_codigo)
//    {
//        try {
//            $transportes = Transporte::findOrFail($transporte_codigo);
//
//            $validatedData = $request->validate([
//                'content' => 'required|max:255',
//                // Otras reglas de validación
//            ]);
//
//            // Crear un nuevo comentario con los datos validados
//            $camiones = new Camion();
//            $camiones->content = $validatedData['content'];
//            // Asignar otros valores al comentario si es necesario
//            $camiones->transporte()->associate($transportes);
//            $camiones->save();
//
//            return redirect()->route('transportes.showt', $transporte_codigo)->with('success', 'El comentario ha sido agregado exitosamente.');
//        } catch (QueryException $e) {
//            return redirect()->route('transportes.showt', $transporte_codigo)->with('error', 'No se puede agregar el comentario debido a una violación de clave foránea.');
//        }
   }

}
