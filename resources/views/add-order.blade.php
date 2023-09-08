
@extends('layouts.myapp')
@section('content')
<div class="myForm" style="margin-left: 500px;">

<form method="post" action="{{url('store-order')}}">
    @csrf
    <h3> Make Order </h3>
    <span class="myInput">

        <select name="restaurant_id" >
            <option disabled selected> choose restaurant </option>
            @foreach (\App\Models\Restaurant::all() as $r )
            <option value="{{ $r->id }}">{{ $r->restaurant_name }}</option>
            @endforeach
        </select>
    </span>
    <span class="myInput">
 
    <input type="text" id="details" name="details" placeholder="details">
</span>
<span class="myInput">
   
    <input type="radio" id="type" name="type" value="1" > Indoor
    <input type="radio" id="type" name="type" value="2" > Delivery
</span>

  <button type="submit"> Submit </button>
 </form>
</div>
@endsection