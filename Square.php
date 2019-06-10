<?php

class Square extends Shape implements Colorable
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function howToColor()
    {
        echo "Color all four sides..";
    }

    function show()
    {
        // TODO: Implement show() method.
    }
}