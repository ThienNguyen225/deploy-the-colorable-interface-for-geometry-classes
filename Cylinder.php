<?php

class Cylinder extends Shape
{
    public $height;
    public function __construct($name, $height)
    {
        parent::__construct($name);
        $this->height = $height;
    }

    function show()
    {
        // TODO: Implement show() method.
    }
}