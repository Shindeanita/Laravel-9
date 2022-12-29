<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function aggregateFunction(){
        
        $products = DB::table('products')
            ->join('uom','products.uom','=','uom.id')
            ->select('products.id','products.product_name','products.price','uom.uom_name')
            ->get();
        
        $gproducts = DB::table('products')
            ->groupBy('id')
            ->having('price','>','50')
            ->get();
        
        $lproducts = DB::table('products')
            ->leftjoin('uom','products.uom','=','uom.id')
            ->select('products.id','products.product_name','products.price','products.uom','uom.id','uom.uom_name')
            ->get();


        $innerproducts = DB::table('products')
            ->join('uom','products.uom','=','uom.id')
            ->select('products.id','products.product_name','products.price','products.uom','uom.id','uom.uom_name')
            ->get(); 

        $count = DB::table('products')->sum('price');
        $avg = DB::table('products')->avg('price');
        $min = DB::table('products')->selectRaw('Min(price) as Min , max(price) as Max')->get();

        return view('aggregateFunc',['products'=>$products,'total'=>$count,'avg'=>$avg,'min'=>$min,'gproducts'=>$gproducts,'lproducts'=>$lproducts
                    ,'innerproducts'=>$innerproducts]);
    }
    
}
