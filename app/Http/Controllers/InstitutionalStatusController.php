<?php

namespace App\Http\Controllers;

use App\InstitutionalStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class InstitutionalStatusController extends Controller
{
    public function index(){
        return InstitutionalStatus::all();
    }
    public function show($id)
    {
        return InstitutionalStatus::find($id);
    }
    public function store(Request $request)
    {
        $institutionalStatus = new InstitutionalStatus($request->all());
        $institutionalStatus->save();
        return Response::json($institutionalStatus);
    }
    public function update(Request $request, $id)
    {
        $institutionalStatus = InstitutionalStatus::find($id);
        $institutionalStatus->identification = $request->identification;
        $institutionalStatus->name = $request->name;
        $institutionalStatus->save();
        return Response::json($institutionalStatus);
    }
    public function destroy($id){
        $institutionalStatus = InstitutionalStatus::findOrFail($id);
        $institutionalStatus->delete();
    }

}
