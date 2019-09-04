<?php

namespace App\Http\Controllers;

use App\MemberJobSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MemberJobSiteController extends Controller
{
    public function index(){
        return MemberJobSite::all();
    }
    public function show($id)
    {
        return MemberJobSite::find($id);
    }
    public function store(Request $request)
    {
        $memberJobSite = new MemberJobSite($request->all());
        $memberJobSite->save();
        return Response::json($memberJobSite);
    }
    public function update(Request $request, $id)
    {
        $memberJobSite = MemberJobSite::find($id);
        $memberJobSite->identification = $request->identification;
        $memberJobSite->name = $request->name;
        $memberJobSite->save();
        return Response::json($memberJobSite);
    }
    public function destroy($id){
        $memberJobSite = MemberJobSite::findOrFail($id);
        $memberJobSite->delete();
    }

}
