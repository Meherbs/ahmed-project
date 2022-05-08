<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produit;
use Illuminate\Support\Facades\Auth;

class produitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit = DB::table('produits')
        ->select('*')
        ->get();
        return view('user.home',compact("produit"));
    }


    public function search(Request $request){

        $search = DB::table('produits')
        ->where('title', 'LIKE', "%{$request->search}%")
        ->select('*')
        ->get();

        return view('user.result',compact("search"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
   public function addproduct(){

       return view('user.addproduct');
   }
   public function insertProduct(Request $request){

    $file_extension=$request->photo->getClientOriginalExtension();
    $file_name=time().'.'.$file_extension;
    $path='img';
    $request->photo->move($path,$file_name);


    $title = $request->title;
    $prix = $request->prix;
    $description = $request->description;
    $id = Auth::user()->id;





    Produit::create([
        "image"=> $file_name,
        "description"=> $description,
        "prix"=>$prix,
        "title"=>$title,
        "id_user"=>$id
      ]);
      session()->flash('success','votre annonce est ajouter avec succes');
      return redirect()->back();
   }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $product = DB::table('produits')
        ->where('idprod', $id)
        ->select('*')
        ->get();

        return view('user.updateproduct',compact("product"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::where('idprod', $id)->get()->first();
        return view('detai',compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

      public function showProduct(){
        $produit = DB::table('produits')
        ->select('*')
        ->get();
        return view('welcome',compact("produit"));

      }
      public function details($id){


      }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('produits')
        ->where('idprod',$id)
        ->delete();
        session()->flash('success','votre produit a ete supprimer avec succes ');
        return redirect()->back();


    }

    public function updateProduct(Request $request){
        $file_extension=$request->photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='img';
        $request->photo->move($path,$file_name);
        $title = $request->title;

        $prix = $request->prix;
        $description = $request->description;
        DB::table('produits')
    ->where('idprod', $request->id)
    ->update(['image' => $file_name, 'description' =>  $description, 'prix'=>$prix,'title' =>  $title]);
    session()->flash('success','votre annonce est update ');
      return redirect()->back();
    }
    public function detais($id)
    {
        $produit = DB::table('produits')
        ->select('*')
        ->where("idprod",$id)
        ->get();
        $product = DB::table('produits')
        ->select('*')
        ->get();
        return view('details',compact("produit","product"));

    }
}
