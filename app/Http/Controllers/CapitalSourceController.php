<?php

namespace App\Http\Controllers;

use App\CapitalSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CapitalSourceController extends Controller
{
    public function index(){
        return CapitalSource::all();
    }
    public function show($id)
    {
        return CapitalSource::find($id);
    }
    public function store(Request $request)
    {
        $capitalSource = new CapitalSource($request->all());
        $capitalSource->save();
        return Response::json($capitalSource);
    }
    public function update(Request $request, $id)
    {
        $capitalSource = CapitalSource::find($id);
        $capitalSource->identification = $request->identification;
        $capitalSource->name = $request->name;
        $capitalSource->save();
        return Response::json($capitalSource);
    }
    public function destroy($id){
        $capitalSource = CapitalSource::findOrFail($id);
        $capitalSource->delete();
    }

}
