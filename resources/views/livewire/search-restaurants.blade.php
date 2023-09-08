<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

<div class="myForm sf">
<table>
    <tr>
<td>
<h3> Search for Restaurant </h3>
</td>
    </tr>
<tr>
<td> <input type="text" wire:model="search_term" placeholder="search for restaurant"/>
</td>
<td>
<button class="sb" wire:click ="search"> Search </button> </td>
</tr>
<tr>
    <th> Name </th> <th> Type</th>  <th> address</th> <th> Phone </th>
    </tr>
@if(isset($restaurants))
@foreach ($restaurants as $r )
    
<tr>
<td> {{$r->restaurant_name}} </td> <td> {{$r->cuisine_type}}</td>
<td> {{$r->address}}</td> <td> {{$r->phone}}</td>
</tr>
@endforeach
@else
<tr>
<td>
nothing to show
</td>
</tr>
@endif
</table>
</div>
</div>
