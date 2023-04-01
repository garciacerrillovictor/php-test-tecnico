<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sub;
 
class SubApiController extends Controller
{
    public function list()
    {
        $subList = Sub::all();
        return response()->json($subList);
    }

    public function create(Request $request)
    {
        $sub = Sub::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'description' => $request->input('description'),
        ]);
        return response()->json(["status" => 200, "message"=> "Registro creado."]);
    }
    
    public function delete($id)
    {
        $sub = Sub::findOrFail($id);
        $sub->delete();
        return response()->json(["status" => 200, "message"=> "Registro eliminado."]);
    }
}