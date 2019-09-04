<?php

namespace App\Http\Controllers;

use App\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EnterpriseController extends Controller
{
    //
    public function index(){
        return Enterprise::all();
    }

    public function show($id)
    {
        return Enterprise::find($id);
    }
    public function store(Request $request)
    {
        $enterprise = new Enterprise($request->all());
        $enterprise->save();
        return Response::json($enterprise);
    }
    public function update(Request $request, $id)
    {
        $enterprise = Enterprise::find($id);
//        $enterprise->identification = $request->identification;
//        $enterprise->name = $request->name;
        $enterprise->save();
        return Response::json($enterprise);
    }
    public function destroy($id){
        $enterprise = Enterprise::findOrFail($id);
        $enterprise->delete();
    }
}
