<?php

namespace App\Http\Controllers;

use App\EnterpriseTypeByDefinition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EnterpriseTypeByDefinitionController extends Controller
{
    public function index(){
        return EnterpriseTypeByDefinition::all();
    }
    public function show($id)
    {
        return EnterpriseTypeByDefinition::find($id);
    }
    public function store(Request $request)
    {
        $enterpriseTypeByDefinition = new EnterpriseTypeByDefinition($request->all());
        $enterpriseTypeByDefinition->save();
        return Response::json($enterpriseTypeByDefinition);
    }
    public function update(Request $request, $id)
    {
        $enterpriseTypeByDefinition = EnterpriseTypeByDefinition::find($id);
        $enterpriseTypeByDefinition->identification = $request->identification;
        $enterpriseTypeByDefinition->name = $request->name;
        $enterpriseTypeByDefinition->save();
        return Response::json($enterpriseTypeByDefinition);
    }
    public function destroy($id){
        $enterpriseTypeByDefinition = EnterpriseTypeByDefinition::findOrFail($id);
        $enterpriseTypeByDefinition->delete();
    }

}
