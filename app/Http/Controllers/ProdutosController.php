<?php

namespace App\Http\Controllers;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //

    public function list(){
        $objects = Produtos::all();
        return response()->json($objects);
    }

    public function get($id){
        $object = Produtos::find($id);
        return response()->json($object);
    }

    public function create(Request $request){
     
        $object = new Produtos();

        $object->name     = $request->name;

        
        $object->save();

        return response()->json("Product Successfully Created!");

    }

    public function update(Request $request, $id){

        $object = Produtos::find($id);

        $object->name = $request->name;


        $object->save();

        return response()->json($object);
    }

    public function delete($id){
        $object = Produtos::find($id);
        $object->delete();

        return response()->json('Product sucessfully deleted!');
    }

}
