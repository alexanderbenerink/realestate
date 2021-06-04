<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Houses;
use App\Models\User;
use phpDocumentor\Reflection\DocBlock\Tags\InvalidTag;

class HousesController extends Controller
{
    // Display a listing of the resource
    public function index () {
        $houses = Houses::all();

        return view('search', [
            'houses' => DB::table('houses')->paginate(10)
        ]);
    }

    // Display a listing of the resource
    public function showUserEntries () {
        $houses = Houses::all();

        return view('dashboard', [
            'houses' => DB::table('houses')->where('user_id', auth()->id())->paginate(10)
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
            'price'         => 'required|numeric|digits_between:5,8',
//            'image'         => '',
            'house_type'    => 'required',
            'description'   => 'required|max:2000',
            'postal_code'   => 'required|max:6|regex:/^\d{4} ?[a-z]{2}$/i',
            'surface_area'  => 'required|numeric|digits_between:2,4',
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

        if($house->save()) {
            return redirect('dashboard')->with('success', 'Listing has been added to the market!');
        }
        return redirect('dashboard')->with('error', 'An error has occurred. Please try again.');
    }

    public function show($id) {

//        $user = User::find($id);
//        $houses = $user->houses()->get();
//        $houses = $house->with('user')->find(1);
//        $user = $house->user;
//
//        return view('dashboard')->with(array("user" => $user, "houses" => $houses));

        $houses = Houses::find($id);

        if(Auth::id() !== $houses->user_id) {
            return view('house', compact('houses'));
        } else {
            return view('house', compact('houses'))->with('houses', $houses);
        }

//        return view('house', compact('houses'));

    }

    public function edit($id) {
        $houses = Houses::find($id);

        return view('edit', compact('houses'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'user_id'       => 'required|numeric',
            'address'       => 'required',
            'city'          => 'required',
            'price'         => 'required|numeric|digits_between:5,8',
//            'image'         => '',
            'house_type'    => 'required',
            'description'   => 'required|max:2000',
            'postal_code'   => 'required|regex:/^\d{4} ?[a-z]{2}$/i',
            'surface_area'  => 'required|numeric|digits_between:2,4',
            'published_at'     => 'required|date',
        ]);

        $houses                 =   Houses::find($id);
        $houses->user_id        =   $request->get('user_id');
        $houses->address        =   $request->get('address');
        $houses->city           =   $request->get('city');
        $houses->price          =   $request->get('price');
        $houses->image          =   $request->get('image');
        $houses->house_type     =   $request->get('house_type');
        $houses->description    =   $request->get('description');
        $houses->postal_code    =   $request->get('postal_code');
        $houses->surface_area   =   $request->get('surface_area');
        $houses->published_at   =   $request->get('published_at');

        if($houses->save()) {
            return redirect('dashboard')->with('success', 'The listing information has been successfully edited.');
        }
        return redirect('dashboard')->with('error', 'An error has occurred. Please try again.');
    }

    public function destroy($id) {
        $house = Houses::find($id);

        if($house->delete()) {
            return redirect('dashboard')->with('success', 'Listing has been successfully deleted.');
        }
        return redirect('dashboard')->with('error', 'An error has occurred. Please try again.');
    }

}
