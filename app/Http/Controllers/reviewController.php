<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\review;
class reviewController extends Controller
{
    //

    public function store (Request $request){
     
       

    }

    public function getReviews(){


        $reviews = review::groupby('restaurant_id')->get();
    }

}
