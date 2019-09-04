<?php

namespace App\Http\Controllers;

use App\TypeOfEntrepreneurialInstitution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TypeOfEntrepreneurialInstitutionController extends Controller
{
    public function index(){
        return TypeOfEntrepreneurialInstitution::all();
    }
    public function show($id)
    {
        return TypeOfEntrepreneurialInstitution::find($id);
    }
    public function store(Request $request)
    {
        $typeOfEntrepreneurialInstitution = new TypeOfEntrepreneurialInstitution($request->all());
        $typeOfEntrepreneurialInstitution->save();
        return Response::json($typeOfEntrepreneurialInstitution);
    }
    public function update(Request $request, $id)
    {
        $typeOfEntrepreneurialInstitution = TypeOfEntrepreneurialInstitution::find($id);
        $typeOfEntrepreneurialInstitution->identification = $request->identification;
        $typeOfEntrepreneurialInstitution->name = $request->name;
        $typeOfEntrepreneurialInstitution->save();
        return Response::json($typeOfEntrepreneurialInstitution);
    }
    public function destroy($id){
        $typeOfEntrepreneurialInstitution = TypeOfEntrepreneurialInstitution::findOrFail($id);
        $typeOfEntrepreneurialInstitution->delete();
    }
}
