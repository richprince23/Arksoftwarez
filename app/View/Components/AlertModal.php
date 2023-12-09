<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertModal extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $details;
    public $show;
    public function __construct($title, $details, $show)
    {
        $this->title = $title;
        $this->details = $details;
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-modal');
    }
}
