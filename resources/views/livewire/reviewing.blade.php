<div>
    {{-- The best athlete wants his opponent at his best. --}}
<center>
    <div class="myForm">
{{$error}}

@if(isset($restaurant_id))
    {{ $restaurant_id}}
    @else
    {{5}}
@endif
        <table>
<tr> <h3> Review Restaurant </h3></tr>
            <tr>

<td>    
    <select wire:model="rid" >
        
        @foreach (\App\Models\Restaurant::all() as $r )
        <option value="{{ $r->id }}">{{ $r->restaurant_name }}, {{ $r->id }}</option>
        @endforeach
    </select>
</td>
            </tr>
<tr>
<td colspan="2">
    <center>
Rate the restaurant 
    </center>
</td>
</tr>
            <tr>

<td>
    <input  type="radio" wire:model="rate" value="1">  
    <label for="1"> 1</label>
    <input type="radio" wire:model="rate" value="2"> 2
    <input type="radio" wire:model="rate" value="3"> 3
    
</td>
            </tr>
            <tr>
<td>
<center>
<button wire:click="rating"> Rate </button>
</center>
</td>
            </tr>
        </table>
    </div>
</center>
</div>
