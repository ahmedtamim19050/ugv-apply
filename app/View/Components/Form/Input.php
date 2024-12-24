<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    public string $id;
    public string $name;
    public string $label;
    public string $type;
    public string $placeholder;
    public string $required;
    public array $options;
    public bool $keyValue;
    /**
     * Create a new component instance.
     */
    public function __construct(string $id, string $name, string $label, string $type = 'text', string $placeholder = "", bool $required = true, array $options = [], bool $keyValue = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->options = $options;
        $this->keyValue = $keyValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
