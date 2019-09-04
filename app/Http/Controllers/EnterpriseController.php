<?php

namespace App\Http\Controllers;

use App\AddressScope;
use App\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EnterpriseController extends Controller
{
    //
    public function index(){
        return Enterprise::all();
    }

}
