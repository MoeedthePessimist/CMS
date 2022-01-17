<?php

namespace App\View\Components\header;

use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $color;
    public function __construct()
    {
        // $this->$color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header.header');
    }
}
