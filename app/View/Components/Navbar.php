<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navbar = [
            '/' => 'Home',
            '/tasks' => 'Tasks',
            '/auth' => 'Users',
            'pricing' => 'Pricing',
            'contact' => 'Contact',
        ];

        return view('components.navbar' , compact('navbar'));
    }
}