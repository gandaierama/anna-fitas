<?php

namespace App\Http\Controllers;
use App\Models\Subcategorias;
use Illuminate\Http\Request;

class SubcategoriasController extends Controller
{
    //
    public function list(){
        $objects = Subcategorias::all();
        return response()->json($objects);
    }

    public function get($id){
        $object = Subcategorias::find($id);
        return response()->json($object);
    }

    public function create(Request $request){
     
        $object = new Subcategorias();
        $object->titulo = $request->titulo;
        $object->descricao = $request->descricao;
        $object->imagem = $request->imagem;
        $object->id_categoria = $request->id_categoria;
        $object->status = $request->status;
        //
        $object->save();
        return response()->json("Success");

    }

    public function update(Request $request, $id){

        $object = Subcategorias::find($id);
        $object->titulo = $request->titulo;
        $object->descricao = $request->descricao;
        $object->imagem = $request->imagem;
        $object->id_categoria = $request->id_categoria;
        $object->status = $request->status;
        ///
        $object->save();
        return response()->json($object);
    }

    public function delete($id){
        $object = Subcategorias::find($id);
        $object->delete();
        return response()->json('Deleted');
    }

}
