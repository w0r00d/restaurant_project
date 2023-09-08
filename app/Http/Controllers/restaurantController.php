<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\review;
use Database\Seeders\restaurantSeeder;
use Illuminate\Support\Facades\DB;

class restaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('new-restaurant');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($name, $address, $phone, $type)
    {
        //
        $newRest = Restaurant::create([
            'restaurant_name' =>$name,
            'address'  => $address,
            'phone'  => $phone,
            'cuisine_type'  => $type,
      
         ]);
         
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $restaurant = new Restaurant;
        $restaurant->restaurant_name = $request->restaurant_name;
        $restaurant->cuisine_type = $request->cuisine_type;
        $restaurant->phone = $request->restaurant_phone;
        $restaurant->address = $request->restaurant_address;
        $restaurant->save();
        return redirect('lists');
    }

    public function getReviews(){

   

       // $reviews = DB::table('review')->select(DB::raw('restaurant_id, avg(value) as val'))->groupBy('restaurant_id') ->get();

        $reviews = DB::table('review')->
        join('restaurant','restaurant.id','=','review.restaurant_id')->select(DB::raw('restaurant_name,  avg(value) as val, count(value) as cnt'))->groupBy('restaurant_name')
        ->get();

        

        return view('all-reviews',
         ['reviews'=> $reviews]);
    }
}