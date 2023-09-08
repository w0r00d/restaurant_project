<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Restaurant;

class RestaurantComponent extends Component
{

    public $restaurant_name;
    public $restaurant_address;
    public $restaurant_phone; 
    public $cuisine_type;

    public function render()
    {
        return view('livewire.restaurantcomponent');
    }
    public function resetValues(){
        $this->restaurant_name ='';
        $this->restaurant_address='';
        $this->restaurant_phone='';
        $this->cuisine_type='';

    }
    public function save(){
        $newRest = Restaurant::create([
            'restaurant_name' =>$this->restaurant_name,
            'address'  => $this->restaurant_address,
            'phone'  => $this->restaurant_phone,
            'cuisine_type'  => $this->cuisine_type,
      
         ]);
         $this->resetValues();
    }

    
}
