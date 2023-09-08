<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Restaurant;
class SearchRestaurants extends Component
{

    public $restaurants ;
    public $search_term;
    public $type;

    public function search(){

        if(!isset($this->search_term))
        return;
        
        $res= Restaurant::where('restaurant_name','like','%'.$this->search_term.'%')->get();

        if(isset($res))
        $this->restaurants = $res;
        
        $this->search_term =null;
    }

    public function render()
    {
        return view('livewire.search-restaurants');
    }
}
