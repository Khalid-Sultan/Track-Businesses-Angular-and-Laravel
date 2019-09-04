<?php

namespace App\Http\Controllers;

use App\MemberLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MemberLevelController extends Controller
{
    public function index(){
        return MemberLevel::all();
    }
    public function show($id)
    {
        return MemberLevel::find($id);
    }
    public function store(Request $request)
    {
        $memberLevel = new MemberLevel($request->all());
        $memberLevel->save();
        return Response::json($memberLevel);
    }
    public function update(Request $request, $id)
    {
        $memberLevel = MemberLevel::find($id);
        $memberLevel->identification = $request->identification;
        $memberLevel->name = $request->name;
        $memberLevel->save();
        return Response::json($memberLevel);
    }
    public function destroy($id){
        $memberLevel = MemberLevel::findOrFail($id);
        $memberLevel->delete();
    }

}
