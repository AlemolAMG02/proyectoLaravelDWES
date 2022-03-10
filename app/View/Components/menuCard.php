<?php

namespace App\View\Components;

use Illuminate\View\Component;

class menuCard extends Component
{
    public $enlace;
    public $imagen;
    public $btnText;
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($btnText, $link, $imagen = "storage/festivalPhotos/festival2.jpg", $color = "blue")
    {
        $this->enlace = $link;
        $this->imagen = $imagen;
        $this->btnText = $btnText;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-card');
    }
}
