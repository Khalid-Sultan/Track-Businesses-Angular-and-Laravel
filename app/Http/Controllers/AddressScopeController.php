<?php

namespace App\Http\Controllers;

use App\AddressScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AddressScopeController extends Controller
{
    public function index()
    {
        return AddressScope::all();
    }

    public function show($id)
    {
        return AddressScope::find($id);
    }

    public function store(Request $request)
    {
        $addressScope = new AddressScope($request->all());
        $addressScope->save();
        return Response::json($addressScope);
    }

    public function update(Request $request, $id)
    {
        $addressScope = AddressScope::find($id);
        $addressScope->identification = $request->identification;
        $addressScope->name = $request->name;
        $addressScope->save();
        return Response::json($addressScope);
    }

    public function destroy($id)
    {
        $addressScope = AddressScope::findOrFail($id);
        $addressScope->delete();
    }

}
