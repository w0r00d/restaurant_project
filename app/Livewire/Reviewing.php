<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\review;
class Reviewing extends Component
{


    public $rid;
    public $rate;
    public $error = 0;

    public function render()
    {
        return view('livewire.reviewing');
    }

    public function rating(){

        $review = Review::create([
            'value' => $this->rate,
           'restaurant_id'=> $this->rid,
        ]);

        $this->rid =null;
        $this->rate = null;
        $this->error = 10;
    }


  
}
