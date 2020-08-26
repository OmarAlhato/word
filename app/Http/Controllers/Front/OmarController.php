<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OmarController extends Controller
{
    //
    public function kk(){
        return "omar alhatois";
    }
    
    public function dd(){
        $date=[];
        $date['id']=4;
        $date['name']=' aalhatoomar';
        return view ('welcome',$date);
    }
}
