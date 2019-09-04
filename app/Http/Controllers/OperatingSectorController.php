<?php

namespace App\Http\Controllers;

use App\OperatingSector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class OperatingSectorController extends Controller
{
    public function index(){
        return OperatingSector::all();
    }
    public function show($id)
    {
        return OperatingSector::find($id);
    }
    public function store(Request $request)
    {
        $operatingSector = new OperatingSector($request->all());
        $operatingSector->save();
        return Response::json($operatingSector);
    }
    public function update(Request $request, $id)
    {
        $operatingSector = OperatingSector::find($id);
        $operatingSector->identification = $request->identification;
        $operatingSector->name = $request->name;
        $operatingSector->save();
        return Response::json($operatingSector);
    }
    public function destroy($id){
        $operatingSector = OperatingSector::findOrFail($id);
        $operatingSector->delete();
    }

}
