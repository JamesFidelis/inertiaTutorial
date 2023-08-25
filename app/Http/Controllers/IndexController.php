<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{



    public function index(){

         return inertia('Index/Index',
         [
             'message'=>'Hello Home'
         ]);

    }


    public function show(){


        return Inertia::render('Index/Show');
    }


}
