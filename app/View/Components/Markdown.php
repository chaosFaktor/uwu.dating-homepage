<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use parkdown\Parkdown;

class Markdown extends Component
{
    /**
     * Create a new component instance.
     */
    public $path;
    public $html;
    public function __construct($path)
    {
        $this->path = $path;
        $parser = new Parkdown(file_get_contents($path));
        $this->html = $parser->html();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.markdown');
    }
}
