<?php

namespace App\Http\Controllers;

use App\EnterpriseLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EnterpriseLevelController extends Controller
{
    public function index(){
        return EnterpriseLevel::all();
    }
    public function show($id)
    {
        return EnterpriseLevel::find($id);
    }
    public function store(Request $request)
    {
        $enterpriseLevel = new EnterpriseLevel($request->all());
        $enterpriseLevel->save();
        return Response::json($enterpriseLevel);
    }
    public function update(Request $request, $id)
    {
        $enterpriseLevel = EnterpriseLevel::find($id);
        $enterpriseLevel->identification = $request->identification;
        $enterpriseLevel->name = $request->name;
        $enterpriseLevel->save();
        return Response::json($enterpriseLevel);
    }
    public function destroy($id){
        $enterpriseLevel = EnterpriseLevel::findOrFail($id);
        $enterpriseLevel->delete();
    }

}
