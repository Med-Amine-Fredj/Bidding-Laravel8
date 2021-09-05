<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Produit;
use App\Models\User;

class ProfileController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



/**
     * Update the user's profile.
     *
     * @return Response
     */
    /*public function updateProfile(Request $request)


        {
            $users = User::find(Auth::user()->id);

            $user->name = $request->get('name');

            $user->email = $request->get('email');
            $user->numtel = $request->get('numtel');
            $user->ville = $request->get('ville');

            $user->save();

            return view('profile');
        }*/

       public function updateProfile(Request $request)
        {
            $users = User::find(Auth::user()->id);

                $input = $request->all();
                $users->update($input);
                $success=$users;
                return back();
        }

    public function getUser($id)
    {
        $users = User::find(Auth::user()->id);

        return view('profile')->with(['users' => $users]);
    }

    public function mesProduits()
    {
        $users = User::find(Auth::user()->id);
        $produits= Produit::where('id_user','=',$users->id)->get();
        return view('mesProduits')->withProduits($produits);
    }

    public function profile()
    {
        return view('profile');
    }


}
