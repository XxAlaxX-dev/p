<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        
        return view('welcome');
        
    }
    public function services(){
        $tab=[ 
                'title'=>'nos services',
                'services'=>['creation compte','versement','retrait','transfert dargent']];
        
        return view('services',$tab);
    }
}
