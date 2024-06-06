<?php

namespace Services;

class ImageService
{
    private array $file;
    public function __construct(array $file)
    {
        $this->file = $file;
    }
    public function getExtension()
    {

    }

}