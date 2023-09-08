
    {{-- Because she competes with no one, no one can compete with her. --}}
<div class="myList"> 
    <h4> List of restaurants </h4>
    <table> 
    @foreach ($restaurants as $r)
<tr>
    <td>
    <div class="list-item"> {{$r->restaurant_name;}} </div>
    </td>
    <td>
        <button class="B">  make order </button>
    </td>
</tr>
    @endforeach
    </table>
</div>
</div>