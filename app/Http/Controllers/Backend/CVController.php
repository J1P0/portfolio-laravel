<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CV;

class CVController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $cv = CV::orderBy('id', 'desc')->get();
        return  view('backend.cv.index', compact('cv'));
    }

    public function process(Request $request){
        
    }
}
