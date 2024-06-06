<?php
namespace view;
class View
{
    private string $layout='userLayout';
    private string $view = 'default';
    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }
    public function setView(string $view): void
    {
        $this->view = $view;
    }

    public function getView(array $vars): string
    {
        $s = DIRECTORY_SEPARATOR;
        extract($vars);
        ob_start();
        include ROOT.$s."view".$s.$this->view.".php";
        return ob_get_clean();
    }
    public function getLayout(string $view): string
    {
        $s = DIRECTORY_SEPARATOR;
        ob_start();
        $path = ROOT.$s."view".$s."layout".$s.$this->layout.".php";
        include $path;
        return ob_get_clean();
    }
}