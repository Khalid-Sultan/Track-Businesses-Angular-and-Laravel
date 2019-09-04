<?php

namespace App\Http\Controllers;

use App\OperatingSubSector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class OperatingSubSectorController extends Controller
{
    public function index(){
        return OperatingSubSector::all();
    }
    public function show($id)
    {
        return OperatingSubSector::find($id);
    }
    public function store(Request $request)
    {
        $operatingSubSector = new OperatingSubSector($request->all());
        $operatingSubSector->save();
        return Response::json($operatingSubSector);
    }
    public function update(Request $request, $id)
    {
        $operatingSubSector = OperatingSubSector::find($id);
        $operatingSubSector->identification = $request->identification;
        $operatingSubSector->name = $request->name;
        $operatingSubSector->save();
        return Response::json($operatingSubSector);
    }
    public function destroy($id){
        $operatingSubSector = OperatingSubSector::findOrFail($id);
        $operatingSubSector->delete();
    }
}
