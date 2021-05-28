<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Houses;
use App\Models\User;

class HousesController extends Controller
{
    // Display a listing of the resource
    public function index () {
        $houses = Houses::all();

        return view('search', [
            'houses' => DB::table('houses')->paginate(10)
        ]);
    }

    // Search a listing of the resource
    public function search(Request $request) {
        $search = $request->get('search');
        $houses = DB::table('houses')
            ->where('address', 'like', '%'.$search.'%')
            ->orWhere('price', 'like', '%'.$search.'%')
            ->orWhere('city', 'like', '%'.$search.'%')
            ->orWhere('house_type', 'like', '%'.$search.'%')
            ->orWhere('description', 'like', '%'.$search.'%')
            ->orWhere('postal_code', 'like', '%'.$search.'%')
            ->orWhere('surface_area', 'like', '%'.$search.'%')
            ->orderBy('id', 'desc')->paginate(10);

        return view('search', compact('houses'));
    }

    public function create () {
        return view('houses.create');
    }

    public function store(Request $request) {
        $request->validate([
            'user_id'       => 'required|numeric',
            'address'       => 'required',
            'city'          => 'required',
            'price'         => 'required|numeric',
//            'image'         => '',
            'house_type'    => 'required',
            'description'   => 'required',
            'postal_code'   => 'required',
            'surface_area'  => 'required|numeric',
            'published_at'     => 'required|date',
        ]);

        $house = new Houses ([
            'user_id'       => $request->get('user_id'),
            'address'       => $request->get('address'),
            'city'          => $request->get('city'),
            'price'         => $request->get('price'),
            'image'         => $request->get('image'),
            'house_type'    => $request->get('house_type'),
            'description'   => $request->get('description'),
            'postal_code'   => $request->get('postal_code'),
            'surface_area'  => $request->get('surface_area'),
            'published_at'     => $request->get('published_at'),
        ]);

        $house->save();
        return redirect('/create')->with('success', 'House put up for sale!');
    }

    public function show($id) {

//        $user = User::find($id);
//        $houses = $user->houses()->get();
//        $houses = $house->with('user')->find(1);
//        $user = $house->user;
//
//        return view('dashboard')->with(array("user" => $user, "houses" => $houses));

        $houses = Houses::find($id);

        return view('house', compact('houses'));


    }

}
