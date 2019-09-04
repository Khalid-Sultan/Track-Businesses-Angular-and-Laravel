<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class OrganizationController extends Controller
{
    public function index(){
        return Organization::all();
    }
    public function show($id)
    {
        return Organization::find($id);
    }
    public function store(Request $request)
    {
        $organization = new Organization($request->all());
        $organization->save();
        return Response::json($organization);
    }
    public function update(Request $request, $id)
    {
        $organization = Organization::find($id);
        $organization->identification = $request->identification;
        $organization->name = $request->name;
        $organization->save();
        return Response::json($organization);
    }
    public function destroy($id){
        $organization = Organization::findOrFail($id);
        $organization->delete();
    }
}
