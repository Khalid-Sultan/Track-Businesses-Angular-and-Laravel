<?php

namespace App\Http\Controllers;

use App\MarketConnectionCreatorMarket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MarketConnectionCreatorMarketController extends Controller
{
    public function index(){
        return MarketConnectionCreatorMarket::all();
    }
    public function show($id)
    {
        return MarketConnectionCreatorMarket::find($id);
    }
    public function store(Request $request)
    {
        $marketConnectionCreatorMarket = new MarketConnectionCreatorMarket($request->all());
        $marketConnectionCreatorMarket->save();
        return Response::json($marketConnectionCreatorMarket);
    }
    public function update(Request $request, $id)
    {
        $marketConnectionCreatorMarket = MarketConnectionCreatorMarket::find($id);
        $marketConnectionCreatorMarket->identification = $request->identification;
        $marketConnectionCreatorMarket->name = $request->name;
        $marketConnectionCreatorMarket->save();
        return Response::json($marketConnectionCreatorMarket);
    }
    public function destroy($id){
        $marketConnectionCreatorMarket = MarketConnectionCreatorMarket::findOrFail($id);
        $marketConnectionCreatorMarket->delete();
    }

}
