<?php

namespace App\Http\Controllers;
use App\Models\Imagens;
use Illuminate\Http\Request;

class ImagensController extends Controller
{
    //

    public function list(){
        $objects = Imagens::all();
        return response()->json($objects);
    }

    public function get($id){
        $object = Imagens::find($id);
        return response()->json($object);
    }

    public function create(Request $request){
     
        $object = new Imagens();

        $object->titulo = $request->titulo;
        $object->imagem = $request->imagem;
        $object->id_ref = $request->id_ref;
        $object->status = $request->status;

        
        $object->save();

        return response()->json("Product Successfully Created!");

    }

    public function update(Request $request, $id){

        $object = Imagens::find($id);

        $object->titulo = $request->titulo;
        $object->imagem = $request->imagem;
        $object->id_ref = $request->id_ref;
        $object->status = $request->status;


        $object->save();

        return response()->json($object);
    }

    public function delete($id){
        $object = Imagens::find($id);
        $object->delete();

        return response()->json('Product sucessfully deleted!');
    }

}
