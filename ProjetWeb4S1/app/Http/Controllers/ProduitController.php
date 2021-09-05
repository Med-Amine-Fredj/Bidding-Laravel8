<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\winner;
use App\Models\enchere;

class ProduitController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits= Produit::where('statut', '0')->sortByDesc('id')->get();

        return view('produits.index')->withProduits($produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $produit= new Produit();
        $produit->title=$request->input('title');
        $produit->body=$request->input('body');
        $produit->category=$request->input('category');
        $produit->date=$request->input('date');
        $produit->time=$request->input('time');
        $produit->condition=$request->input('condition');
        $produit->id_user=$request->input('id_user');

        $produit->startingPrice=$request->input('startingPrice');
        $produit->image=$request->input('image');
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->extension();
            $filename=time().'.'. $extension;
            $file->move(public_path("imageProduit"),$filename);
            $produit->image=$filename;

        }else{
            return $request;
            $produit->image="";
        }
        $produit->save();
        return redirect('home');







    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments= Comment::all();
        $produit=Produit::find($id);
        return view('produits.show')->withProduit($produit)->withComments($comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post and save as a variable
        $produit=Produit::find($id);
        //return the view and pass in the var we previously created
        return view('produits.edit')->withProduit($produit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function updateProduit(Request $request,$id)
    {


        //save the data to the database
            $produit = Produit::find($id);


            $input = $request->all();
            $produit->update($input);
            $success=$produit;

            $produit->save($request->all());
        return redirect('mesProduits');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect('mesProduits');

    }




    public function setEndProduct(Request $request){
        $product  =  Produit::find($request->idproduct);
        $last=enchere::where('id_product',$request->idproduct)->orderBy('created_at', 'DESC')->first();

        $product->where('id', '=',$request->idproduct)->update(['winner' => $last->name_user,'statut' => '1','new_price' =>  $last->new_price]);
        return (json_encode($product));
    }




    public function postenchere(Request $request){


        $result = enchere::create([
        'new_price' => $request->new_price,
        "id_product"=>$request->idproduct,
        'id_user'=> $request->id_user,
        'time_click' => $request->date,

        'name_user' => $request->pseudo,

        ]);



    return (json_encode($result));
}



public function show1($id)
    {
        $comments= Comment::all();
        $produit=Produit::find($id);
        return view('produits.show1')->withProduit($produit)->withComments($comments);
    }


}
