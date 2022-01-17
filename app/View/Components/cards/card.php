<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $prod_title;
    public $prod_price;
    public $prod_img;

    public function __construct($title, $price, $image)
    {
        $this->prod_title = $title;
        $this->prod_price = $price;
        $this->prod_img = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.card');
    }
}
