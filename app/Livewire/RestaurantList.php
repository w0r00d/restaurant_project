<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;

class RestaurantList extends Component
{

    public $restaurants;

    public function render()
    {
        return view('livewire.restaurant-list');
    }

    public function mount(){
        $this->restaurants = Restaurant::all();

    }
}
