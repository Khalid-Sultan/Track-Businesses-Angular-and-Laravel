<?php

namespace App\Http\Controllers;

use App\OrganizationalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class OrganizationalTypeController extends Controller
{
    public function index(){
        return OrganizationalType::all();
    }
    public function show($id)
    {
        return OrganizationalType::find($id);
    }
    public function store(Request $request)
    {
        $organizationalType = new OrganizationalType($request->all());
        $organizationalType->save();
        return Response::json($organizationalType);
    }
    public function update(Request $request, $id)
    {
        $organizationalType = OrganizationalType::find($id);
        $organizationalType->identification = $request->identification;
        $organizationalType->name = $request->name;
        $organizationalType->save();
        return Response::json($organizationalType);
    }
    public function destroy($id){
        $organizationalType = OrganizationalType::findOrFail($id);
        $organizationalType->delete();
    }
}
