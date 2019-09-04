<?php

namespace App\Http\Controllers;

use App\MarketConnectionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MarketConnectionTypeController extends Controller
{
    public function index(){
        return MarketConnectionType::all();
    }
    public function store(Request $request)
    {
        $marketConnectionType = new MarketConnectionType($request->all());
        $marketConnectionType->save();
        return Response::json($marketConnectionType);
    }
    public function update(Request $request, $id)
    {
        $marketConnectionType = MarketConnectionType::find($id);
        $marketConnectionType->identification = $request->identification;
        $marketConnectionType->name = $request->name;
        $marketConnectionType->save();
        return Response::json($marketConnectionType);
    }
    public function destroy($id){
        $marketConnectionType = MarketConnectionType::findOrFail($id);
        $marketConnectionType->delete();
    }

}
