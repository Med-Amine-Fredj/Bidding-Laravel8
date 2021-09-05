<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\winner;
use Illuminate\Http\Request;
Use \Carbon\Carbon;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produits= Produit::where('statut', '=','0')->get();


        return view('home')->withProduits($produits);
    }


    public function ench_auj()
    {
        $now=Carbon::now()->format('y-m-d');

    $produits= Produit::where('date','=',$now)->where('statut','=' ,'0')->get();
    return view('ench_auj')->withProduits($produits);
    }


    public function ench_termine()
    {

    $produits= Produit::where('statut', '=','1')->get();



    return view('ench_termine', ['produits' => $produits ]);
    }



}
