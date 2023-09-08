@extends('layouts.myapp')

@section('content')
    {{-- Because she competes with no one, no one can compete with her. --}}
<div class="myList"> 
    <h4> List of reviews </h4>
    <table> 
        <thead>
<th> Restaurant </th>
<th> Avg rating </th>
        <th> number of reviews </th>
        </thead>
    @foreach ($reviews as $review)

<tr>
    <td>
    <div class="list-item"> {{$review->restaurant_name}}  </div>
    </td>
    <td>
        <div class="list-item"> {{round($review->val,2);}} </div>
    </td>
    <td>
        <div class="list-item"> {{$review->cnt;}} </div>
    </td>
</tr>

    @endforeach
    </table>
</div>
</div>
@endsection
