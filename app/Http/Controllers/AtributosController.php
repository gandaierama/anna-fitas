<?php

namespace App\Http\Controllers;
use App\Models\Atributos;
use Illuminate\Http\Request;

class AtributosController extends Controller
{
    //

    public function list(){
        $object = Atributos::all();
        return response()->json($object);
    }

    public function get($id){
        $object = Atributos::find($id);
        return response()->json($object);
    }

    public function create(Request $request){
     
        $object = new Atributos();

        $object->titulo = $request->titulo;
        $object->type = $request->type;
        $object->valor = $request->valor;
        $object->status = $request->status;
    
        


        
        $object->save();

        return response()->json("Product Successfully Created!");

    }

    public function update(Request $request, $id){

        $object = Atributos::find($id);

        $object->titulo = $request->titulo;
        $object->type = $request->type;
        $object->valor = $request->valor;
        $object->status = $request->status;


        $object->save();

        return response()->json($object);
    }

    public function delete($id){
        $object = Atributos::find($id);
        $object->delete();

        return response()->json('Product sucessfully deleted!');
    }

}
