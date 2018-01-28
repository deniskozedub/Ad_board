<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdRequest;
use App\Models\Ad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    // ADD

    public function ad_page()
    {
        return view("ads/ad_page");
    }

    public function ad_page_handler(AdRequest $request)
    {
        $ad = new Ad();
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->user_id = Auth::id();
        $ad->save();
        return redirect('/');
    }

    //DELETE

    public function delete_ad_handler($id)
    {
        $ad = Ad::find((int)$id);
        if($ad->user_id != Auth::user()->id) return redirect("/");
        $ad->delete();
        return redirect('/');
    }

    //EDIT

    public function  edit_page($id)
    {

        $edit_ad = Ad::find((int)$id);
        if($edit_ad->user_id != Auth::user()->id) return redirect("/");
        return view('ads/ad_edit_page')->with([
            "edit_ad" => $edit_ad
        ]);

    }

    public function edit_handler(Request $request)
    {
        $ad = Ad::find((int)$request->id);
        if($request->u_id != Auth::user()->id) return redirect('/');
        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->save();
        return redirect('/');

    }

    //ONE AD

    public function one_ad($id)
    {
        $ad = Ad::find($id);
        return view('ads/one_ad')->with([
            "ad" => $ad
        ]);
    }


}
