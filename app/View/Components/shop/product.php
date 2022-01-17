<?php

namespace App\View\Components\shop;

use Illuminate\View\Component;

class product extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $prod_data;
    public $prod_id;
    public $prod_title;
    public $prod_price;
    public $prod_manf;
    public $prod_categ;
    public $prod_image;
    public function __construct($data)
    {
        $this->prod_data = $data;
        $this->prod_id = $data->id;
        $this->prod_title = $data->Title;
        $this->prod_price = $data->Price;
        $this->prod_manf = $data->manufacturer;
        $this->prod_categ = $data->category;
        $this->prod_image = $data->image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shop.product');
    }
}
