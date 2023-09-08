
                @extends('layouts.myapp')
                @section('content')
                <div class="myForm" style="margin-left: 500px;">
               
                <form method="post" action="{{url('store-form')}}">
                    @csrf
                    <h3> Add New Restaurant </h3>
                    <span class="myInput">
                
                    <input type="text" id ="restaurant_name" name="restaurant_name" placeholder="name">
                    </span>
                    <span class="myInput">
                 
                    <input type="text" id="cuisine_type" name="cuisine_type" placeholder="cuisine type">
                </span>
                <span class="myInput">
                   
                    <input type="text" id="restaurant_address" name="restaurant_address" placeholder="address">
                </span>
                <span class="myInput">
                 
                    <input type="text" id="restaurant_phone" name="restaurant_phone" placeholder="phone ">
                </span>
                  <button type="submit"> Submit </button>
                 </form>
                </div>
           @endsection