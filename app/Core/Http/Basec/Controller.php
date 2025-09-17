<?php
declare(strict_types=1);

namespace Core\Http;

use Core\Kernel;
use Core\Renderer\View;

class BaseController
{
    private View $view;
    protected string $layout = 'default'; 
    public function __construct() 
    {
        $templates = Kernel::projectDir()."/views";
        $this->view = new View(path: $templates, layout: $this->layout);
    }

    protected function view(): View
    {
        return $this->view;
    }
}
