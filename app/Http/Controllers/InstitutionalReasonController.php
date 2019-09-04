<?php

namespace App\Http\Controllers;

use App\InstitutionalReason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class InstitutionalReasonController extends Controller
{
    public function index(){
        return InstitutionalReason::all();
    }
    public function show($id)
    {
        return InstitutionalReason::find($id);
    }
    public function store(Request $request)
    {
        $institutionalReason = new InstitutionalReason($request->all());
        $institutionalReason->save();
        return Response::json($institutionalReason);
    }
    public function update(Request $request, $id)
    {
        $institutionalReason = InstitutionalReason::find($id);
        $institutionalReason->identification = $request->identification;
        $institutionalReason->name = $request->name;
        $institutionalReason->save();
        return Response::json($institutionalReason);
    }
    public function destroy($id){
        $institutionalReason = InstitutionalReason::findOrFail($id);
        $institutionalReason->delete();
    }

}
