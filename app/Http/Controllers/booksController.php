<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class booksController extends Controller
{
    //


   function getAllBooks(){
  //  $r = Restaurant::has('reviews')->get();
        $r = Restaurant::has('reviews')->get();  
       
    // $r=Restaurant::all();
    return json_encode($r); 
    }
}
