<?php

namespace Controllers;

abstract class Controller
{       //rend les vues
    protected function render(string $view, array $params = []): void
    {
        ob_start();
        foreach ($params as $key => $value) {
            ${$key} = $value;
        }
        require $view;
        $content = ob_get_clean();
        require $extend;
    }
}
