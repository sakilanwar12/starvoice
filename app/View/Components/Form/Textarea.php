<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $placeholder;

    public function __construct($name = null, $placeholder = null)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.form.textarea');
    }
}
