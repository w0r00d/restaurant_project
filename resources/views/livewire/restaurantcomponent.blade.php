<div>

<center>

    <div class="myForm">
    <table>
<tr>
    <td colspan="2"> 
<h3> Adding New Restaurant </h3>
    </td>

</tr>
<tr> 
<td>
    <input wire:model="restaurant_name" type="text" placeholder="add name ..."/>
</td>
</tr>
<tr>
<td>
    <input wire:model="restaurant_address" type="text" placeholder="add address ..."/>
</td>
</tr>
<tr>
    <td>
        <input wire:model="restaurant_phone" type="text" placeholder="add phone ..."/>
    </td>
    </tr>
    <tr>
        <td>
            <input wire:model="cuisine_type" type="text" placeholder="add cuisine ..."/>
        </td>
        </tr>
        <tr>
            <td colspan="2"> 
                <center> <button wire:click="save"> Add </button> </center>
            </td>
            </tr>
    </table>
    </div>
</center>
</div>
