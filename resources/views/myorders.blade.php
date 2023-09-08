@extends('layouts.myapp')
@section('content')
    {{-- Because she competes with no one, no one can compete with her. --}}
<div class="myList" style="width: 500px; margin-left: 30%;"> 
    <h4> My orders  </h4>
    <table> 
        <tr>

<th> Restaurant Name </th>
<th> Order Details </th>
    <th> Order Total</th>
    <th> Order Status</th>
    
        </tr>
    @foreach ($orders as $order)
<tr>
    <td>
    
    <div class="list-item"> {{$order->restaurant->restaurant_name;}} </div>
        </td>
  
    <td>
        <div class="list-item"> {{$order->order_details;}} </div>
    </td>
    <td>
     
            <div class="list-item"> {{$order->order_total;}} </div>
    </td>
    <td>
     
        <div class="list-item"> 
        @if ($order->order_status)
            pending
        @else
        delivered
        @endif
        </div>
</td>

   
</tr>
    @endforeach
    </table>
</div>
</div>
@endsection