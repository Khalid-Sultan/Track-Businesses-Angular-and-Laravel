<?php

namespace App\Http\Controllers;

use App\EnterpriseMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EnterpriseMemberController extends Controller
{
    public function index(){
        return EnterpriseMember::all();
    }
    public function show($id)
    {
        return EnterpriseMember::find($id);
    }
    public function store(Request $request)
    {
        $enterpriseMember = new EnterpriseMember($request->all());
        $enterpriseMember->save();
        return Response::json($enterpriseMember);
    }
    public function update(Request $request, $id)
    {
        $enterpriseMember = EnterpriseMember::find($id);
        $enterpriseMember->identification = $request->identification;
        $enterpriseMember->name = $request->name;
        $enterpriseMember->save();
        return Response::json($enterpriseMember);
    }
    public function destroy($id){
        $enterpriseMember = EnterpriseMember::findOrFail($id);
        $enterpriseMember->delete();
    }

}
