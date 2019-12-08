<?php

namespace App\Http\Controllers;

use App\Products;
use App\Product;
use App\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('create');
    }


  // * Show the form for creating a new resource.
  //    *
  //    * @return \Illuminate\Http\Response
  //    */
    public function qr()
    {   $no= rand(1000,9999);
        $qr= QrCode::size(300)->generate($no);
           return view('qr' , compact('qr','no'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


          $request->validate([
        'no1'=>'required|integer',
        'no2'=> 'required|integer',
        'text1' => 'required',
        'text2' => 'required',
        'text3' => 'required',
        'text4' => 'required',
        'header1' => 'required',
        'header2' => 'required',
      ]);
           $product = new Product([
        'no1' => $request->get('no1'),
        'no2'=> $request->get('no2'),
        'text1'=> $request->get('text1'),
        'text2'=> $request->get('text2'),
        'text3'=> $request->get('text3'),
        'text4'=> $request->get('text4'),
        'header1'=> $request->get('header1'),
        'header2'=> $request->get('header2'),
      ]);


        $product->save();
        return redirect('/qr')->with('success', 'products has been added');
    }







  public function result(Request $request)
    {

        $no=$request->get('no');
  
           $result = new Result([
        'no' => $request->get('no'),

      ]);


        $result->save();
        return redirect('/sucess')->with('success', 'Stock has been added');
    }


     public function sucess()
    {
        $no = DB::table('results')->get()->last();

           return view('result',compact('no'))->with('success', 'wow !! sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
