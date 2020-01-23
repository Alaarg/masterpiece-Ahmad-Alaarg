<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Templet;
use Illuminate\Support\Facades\Auth;

class TempletController extends Controller
{

    public function index()
    {

        $templets = Templet::all();
        $user_id = Auth::id();

        return view('qawalb.all-products', compact('templets', 'user_id'));
    }

    public function show()
    {

        return view('qawalb.create-product');
    }

    public function store()
    {
        $user_id = Auth::id();

        Templet::create([
            'templet_name' => request('templet_name'),
            'description' => request('description'),
            'category_id' => request('category_id'),
            'templet_liveview_link' => request('templet_liveview_link'),
            'user_id' => $user_id
        ]);
        return redirect('/shop');


    }


}
