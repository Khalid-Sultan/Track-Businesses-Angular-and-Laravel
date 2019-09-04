<?php

namespace App\Http\Controllers;

use App\AddressZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AddressZoneController extends Controller
{
    public function index(){
        return AddressZone::all();
    }
    public function show($id)
    {
        return AddressZone::find($id);
    }

    public function store(Request $request)
    {
        $addressZone = new AddressZone($request->all());
        $addressZone->save();
        return Response::json($addressZone);
    }
    public function update(Request $request, $id)
    {
        $addressZone = AddressZone::find($id);
        $addressZone->identification = $request->identification;
        $addressZone->name = $request->name;
        $addressZone->save();
        return Response::json($addressZone);
    }
    public function destroy($id){
        $addressZone = AddressZone::findOrFail($id);
        $addressZone->delete();
    }

}
