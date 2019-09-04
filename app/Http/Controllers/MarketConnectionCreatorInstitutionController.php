<?php

namespace App\Http\Controllers;

use App\MarketConnectionCreatorInstitution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MarketConnectionCreatorInstitutionController extends Controller
{
    public function index(){
        return MarketConnectionCreatorInstitution::all();
    }
    public function show($id)
    {
        return MarketConnectionCreatorInstitution::find($id);
    }
    public function store(Request $request)
    {
        $marketConnectionCreatorInstitution = new MarketConnectionCreatorInstitution($request->all());
        $marketConnectionCreatorInstitution->save();
        return Response::json($marketConnectionCreatorInstitution);
    }
    public function update(Request $request, $id)
    {
        $marketConnectionCreatorInstitution = MarketConnectionCreatorInstitution::find($id);
        $marketConnectionCreatorInstitution->identification = $request->identification;
        $marketConnectionCreatorInstitution->name = $request->name;
        $marketConnectionCreatorInstitution->save();
        return Response::json($marketConnectionCreatorInstitution);
    }
    public function destroy($id){
        $marketConnectionCreatorInstitution = MarketConnectionCreatorInstitution::findOrFail($id);
        $marketConnectionCreatorInstitution->delete();
    }

}
