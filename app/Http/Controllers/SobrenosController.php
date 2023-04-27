<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;

class SobrenosController extends Controller
{
    public function sobrenos(){
        return view('site.sobre-nos');
    }

    public function store(Request $request){
        return SiteContato::create($request->all());
    }
}
