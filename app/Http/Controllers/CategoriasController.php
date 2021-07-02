<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    //

    public function list(){
        $objects = Categorias::all();
        return response()->json($objects);
    }

    public function get($id){
        $object = Categorias::find($id);
        return response()->json($object);
    }

    public function create(Request $request){
     
        $object = new Categorias();

        $object->titulo = $request->titulo;
        $object->descricao = $request->descricao;
        $object->imagem = $request->imagem;
        $object->status = $request->status;
    
        
        $object->save();

        return response()->json("Product Successfully Created!");

    }

    public function update(Request $request, $id){

        $object = Categorias::find($id);

        $object->titulo = $request->titulo;
        $object->descricao = $request->descricao;
        $object->imagem = $request->imagem;
        $object->status = $request->status;


        $object->save();

        return response()->json($object);
    }

    public function delete($id){
        $object = Categorias::find($id);
        $object->delete();

        return response()->json('Product sucessfully deleted!');
    }

}
