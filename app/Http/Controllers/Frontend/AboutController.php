<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::orderBy('id',)->get();
        return view('frontend.about.index', compact('abouts'));
    }

    public function about()
    {
        return view('backend.about.about');
    }

    public function process(Request $request)
    {
        $rule = [
            'title' => 'required',
            'description' => 'required',
        ];

        $message = [
            'title.required' => 'The Field <strong>name</strong> is requierd!',
            'description.required' => 'The Field <strong>slug</strong> is requierd!',
        ];

        $validator = Validator::make($request->all(), $rule, $message);

        if ($validator->fails()) {
            return redirect()->route('backend.about.about')->withErrors($validator)->withInput();
        } else {
            About::where('id', '1')->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            $pesan = "Hi {$request->title}, success";
            return redirect()->route('backend.about.about')->with('success', $pesan);
        };
    }
}
