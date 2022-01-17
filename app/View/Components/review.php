<?php

namespace App\View\Components;

use Illuminate\View\Component;

class review extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $data;
    public $name;
    public $comment;


    public function __construct($data)
    {
        $this->data = $data;
        $this->name = $data->name;
        $this->comment = $data->review;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.review');
    }
}
