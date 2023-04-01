<?php
 
namespace App\Http\Controllers;
 
use App\Models\Sub;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class SubController extends Controller
{

    public function index()
    {

        $subList = Sub::all();
        return view('sub.index', ['subs' => $subList]);
    }

    public function create(Request $request)
    {
        $sub = Sub::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('index');
    }

    
    public function delete($id)
    {

        $sub = Sub::findOrFail($id);
        $sub->delete();
        return redirect()->route('index');
    }
}