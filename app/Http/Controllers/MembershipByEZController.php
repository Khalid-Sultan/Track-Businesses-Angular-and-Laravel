<?php

namespace App\Http\Controllers;

use App\MembershipByEZ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MembershipByEZController extends Controller
{
    public function index(){
        return MembershipByEZ::all();
    }
    public function show($id)
    {
        return MembershipByEZ::find($id);
    }
    public function store(Request $request)
    {
        $membershipByEZ = new MembershipByEZ($request->all());
        $membershipByEZ->save();
        return Response::json($membershipByEZ);
    }
    public function update(Request $request, $id)
    {
        $membershipByEZ = MembershipByEZ::find($id);
        $membershipByEZ->identification = $request->identification;
        $membershipByEZ->name = $request->name;
        $membershipByEZ->save();
        return Response::json($membershipByEZ);
    }
    public function destroy($id){
        $membershipByEZ = MembershipByEZ::findOrFail($id);
        $membershipByEZ->delete();
    }

}
