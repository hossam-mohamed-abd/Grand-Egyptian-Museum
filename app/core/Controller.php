<?php

class Controller
{
    protected function render(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);
        require VIEW_PATH . $view;
    }
}
