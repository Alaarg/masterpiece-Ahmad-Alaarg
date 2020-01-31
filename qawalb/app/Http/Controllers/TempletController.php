<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Templet;
use App\User;
use Illuminate\Support\Facades\Auth;

class TempletController extends Controller
{

    public function index()
    {

        $templets = Templet::all();
        // $user_name = Auth::user()->name;
        // $user_name = User::find()->name;

        $catagury = Templet::find('category_id' );

        return view('qawalb.index', compact('templets','catagury'));
    }

    public function show(Templet $templet)

    {
        // $user_name = Auth::user()->name;
    
        return view('qawalb.product-details', compact('templet'));
    }

    public function createTemplet()
    {


        return view('qawalb.create-product');
    }
    public function store(Request $request)
    {
        $user_id = Auth::id();
        Templet::create([
            'templet_name' => request('templet_name'),
            'description' => request('description'),
            'templet_img' => $request->file('templet_img')->store('public'),
            'templet_file' => $request->file('templet_file')->store('public'),
            'category_id' => request('category_id'),
            'templet_liveview_link' => request('templet_liveview_link'),
            'user_id' => $user_id
        ]);
        return redirect('/');
    }

}
