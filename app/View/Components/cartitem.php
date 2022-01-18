<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cartitem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $title;
    public $price;
    public $image;
    public $userId;

    public function __construct($data)
    {
        $this->id = $data->id;
        $this->title = $data->title;
        $this->price = $data->price;
        $this->image = $data->image;
        $this->userId = $data->userID;
        // return dd($this-data);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cartitem');
    }
}
