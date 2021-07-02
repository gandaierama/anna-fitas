<?php

namespace App\Http\Controllers;
use App\Models\Gateways;
use Illuminate\Http\Request;

class GatewaysController extends Controller
{
    //

    public function list(){
        $objects = Gateways::all();
        return response()->json($objects);
    }

    public function get($id){
        $object = Gateways::find($id);
        return response()->json($object);
    }

    public function create(Request $request){
     
        $object = new Gateways();

        $object->name     = $request->name;

        
        $object->save();

        return response()->json("Product Successfully Created!");

    }

    public function update(Request $request, $id){

        $object = Gateways::find($id);

        $object->name = $request->name;


        $object->save();

        return response()->json($object);
    }

    public function delete($id){
        $object = Gateways::find($id);
        $object->delete();

        return response()->json('Product sucessfully deleted!');
    }

}
