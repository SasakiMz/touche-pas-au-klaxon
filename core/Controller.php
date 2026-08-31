<?php

namespace Core;

class Controller
{
    /**
     * @param string $template
     * @param array<string, mixed> $data
     */
    protected function render(string $template, array $data = []): void {
        extract($data);
        require __DIR__ . '/../templates/' . $template . '.php';
    }
}