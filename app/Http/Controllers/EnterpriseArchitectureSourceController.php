<?php

namespace App\Http\Controllers;

use App\EnterpriseArchitectureSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EnterpriseArchitectureSourceController extends Controller
{
    public function index(){
        return EnterpriseArchitectureSource::all();
    }
    public function show($id)
    {
        return EnterpriseArchitectureSource::find($id);
    }
    public function store(Request $request)
    {
        $enterpriseArchitectureSource = new EnterpriseArchitectureSource($request->all());
        $enterpriseArchitectureSource->save();
        return Response::json($enterpriseArchitectureSource);
    }
    public function update(Request $request, $id)
    {
        $enterpriseArchitectureSource = EnterpriseArchitectureSource::find($id);
        $enterpriseArchitectureSource->identification = $request->identification;
        $enterpriseArchitectureSource->name = $request->name;
        $enterpriseArchitectureSource->save();
        return Response::json($enterpriseArchitectureSource);
    }
    public function destroy($id){
        $enterpriseArchitectureSource = EnterpriseArchitectureSource::findOrFail($id);
        $enterpriseArchitectureSource->delete();
    }

}
