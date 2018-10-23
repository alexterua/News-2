<?php

namespace App;


class View
{
    protected $data = [];

    public function assign(string $name, array $value)
    {
        $this->data[$name] = $value;
    }

    public function render(string $template)
    {
        ob_start();
        extract($this->data, EXTR_SKIP);
        require_once realpath(__DIR__ . '/../templates/' . $template);
        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }
}