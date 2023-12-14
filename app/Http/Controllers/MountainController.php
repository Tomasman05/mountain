<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMountainData;
use Illuminate\Support\Facades\Validator;

class MountainController extends Controller
{
    public function getForm(){
        return view("mountainForm");
    }
    public function submitMountain(StoreMountainData $request){
        $request->validated();
       // print_r($request->input("name"));
       $full = $request->all();
       $name = $full["name"];
       print_r($name);
    }
}
