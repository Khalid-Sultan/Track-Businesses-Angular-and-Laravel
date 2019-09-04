<?php

namespace App\Http\Controllers;

use App\MemberJobType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MemberJobTypeController extends Controller
{
    public function index(){
        return MemberJobType::all();
    }
    public function show($id)
    {
        return MemberJobType::find($id);
    }
    public function store(Request $request)
    {
        $memberJobType = new MemberJobType($request->all());
        $memberJobType->save();
        return Response::json($memberJobType);
    }
    public function update(Request $request, $id)
    {
        $memberJobType = MemberJobType::find($id);
        $memberJobType->identification = $request->identification;
        $memberJobType->name = $request->name;
        $memberJobType->save();
        return Response::json($memberJobType);
    }
    public function destroy($id){
        $memberJobType = MemberJobType::findOrFail($id);
        $memberJobType->delete();
    }

}
