<?php

namespace App\Http\Controllers;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //

    public function list(){
        $objects = Clientes::all();
        return response()->json($objects);
    }

    public function get($id){
        $object = Clientes::find($id);
        return response()->json($object);
    }

    public function create(Request $request){
     
        $object = new Clientes();

        $object->nome = $request->nome;
        $object->email = $request->email;
        $object->senha = $request->senha;
        $object->telefone = $request->telefone;
        $object->celular = $request->celular;
        $object->cpf = $request->cpf;
        $object->rg = $request->rg;
        $object->nascimento = $request->nascimento;
        $object->status = $request->status;

        
        $object->save();

        return response()->json("Product Successfully Created!");

    }

    public function update(Request $request, $id){

        $object = Clientes::find($id);

        $object->nome = $request->nome;
        $object->email = $request->email;
        $object->senha = $request->senha;
        $object->telefone = $request->telefone;
        $object->celular = $request->celular;
        $object->cpf = $request->cpf;
        $object->rg = $request->rg;
        $object->nascimento = $request->nascimento;
        $object->status = $request->status;


        $object->save();

        return response()->json($object);
    }

    public function delete($id){
        $object = Clientes::find($id);
        $object->delete();

        return response()->json('Product sucessfully deleted!');
    }

}
